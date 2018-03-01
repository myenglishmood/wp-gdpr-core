<?php
/**
 * Class SampleTest
 *
 * @package Wp_Gdpr_Core
 */

require_once GDPR_DIR . 'controller/controller-comments.php';
require_once GDPR_DIR . 'vendor/autoload.php';

use Goutte\Client;

/**
 * Sample test case.
 */
class CommentsController extends WP_UnitTestCase {

	public $test_object;

	public function setUp() {
		$this->test_object = new \wp_gdpr\controller\Controller_Comments();
	}

	/**
	 * check of input email existst
	 * check of input checkbox gdpr exists
	 * check of input submit exists
	 */
	function test_gdpr_functions() {
		//when user is logged in
		$client  = new Client();
		$crawler = $client->request( 'GET', 'http://local.gdpr.be/gdpr-request-personal-data/' );

		//add comments
		$this->add_comment( $client );

		//submit request to see data
		$crawler = $this->submit_request_form( $crawler, $client );

		//go to email box in mailhog and check if there is new email in box sended to tes@email.com
		$unique_url = $this->check_email_get_unique_url();

		//get page with all data from plugin
		$comments_page_crawler = $client->request( 'GET', $unique_url );

		//check if in header2 is correct email
		$head_message = $comments_page_crawler->filter( 'h2' )->text();
		$this->assertNotEmpty( strpos( $head_message, 'test@email.com' ) );


		//check if there are comments in table with comments
		$form = $comments_page_crawler->selectButton('Send delete request')->form();
		//check checkbox with comments
		$form['gdpr_delete_comments'][0]->tick();
		//submit form
		$crawler = $client->submit( $form );

		$text_after_form_submiotion = $crawler->filter('h3')->text();
		$this->assertEquals('The site administrator received your request. Thank You.', $text_after_form_submiotion);

		//go to admin page
		$crawler = $client->request( 'GET', 'http://local.gdpr.be/wp-admin/admin.php?page=deletelist' );
		//get number of posts
		$form =  $crawler->selectButton('Log In')->form();
		if( ! empty($form) ){
			//when have to log in
			$form->setValues(
				array(
					'pwd' => 123,
					'log' => 'seba'
				)
			);

			$crawler = $client->submit($form);
		}

		//check request
		$form = $crawler->selectButton('Delete personal data')->form();
		//select checkbox
		$form['gdpr_requests'][0]->tick();

		//delete comment
		$crawler = $client->submit($form);

		//check notice
		$message = $crawler->filter('div.notice')->text();
		$this->assertEquals($message, 'Comments deleted');
	}

	/**
	 * @param $crawler
	 * @param $client
	 *
	 * @return mixed
	 */
	public function submit_request_form( $crawler, $client ) {
		$form = $crawler->selectButton( 'Submit' )->form();
		//select checkbox
		$form['checkbox_gdpr']->tick();
		$form->setValues( array(
			'email' => 'test@email.com'
		) );

//		//TODO add id for every element in html
		$crawler = $client->submit( $form );
		$message = $crawler->filter( 'h3' )->text();
		$this->assertEquals( 'Thank You! We will send you email in 48h.', $message );

		return $crawler;
	}

	/**
	 * @return string
	 */
	public function check_email_get_unique_url() {
		$response         = wp_remote_get( 'http://local.gdpr.be:8025/api/v1/messages' );
		$decoded_response = json_decode( $response['body'] );

		$to = $this->helper_get_from_email_headers( $decoded_response[0], 'To' );
		$this->assertEquals( $to, 'test@email.com, sebastss@fsdfads.com' );

		$from = $this->helper_get_from_email_headers( $decoded_response[0], 'From' );
		$this->assertEquals( $from, 'WordPress <wordpress@local.gdpr.be>' );

		$subject = $this->helper_get_from_email_headers( $decoded_response[0], 'Subject' );
		$this->assertEquals( $subject, 'Data request' );

		$content_html = $this->helper_get_email_body( $decoded_response[0] );
		//$this->assertEquals($subject, 'Data request');
		$crawler    = new \Symfony\Component\DomCrawler\Crawler( $content_html );
		$unique_url = $crawler->filter( 'a' )->getNode( 0 )->getAttribute( 'href' );

		return $unique_url;
	}

	public function helper_get_from_email_headers( $response, $key = null ) {
		if ( empty( $key ) ) {
			return $response->Content->Headers;
		}

		return $response->Content->Headers->{$key}[0];
	}

	public function helper_get_email_body( $response ) {
		return $response->Content->Body;
	}

	/**
	 * @return array
	 */
	public function test_if_inputs_exists() {
		$client = new Client();
		//check if checkbox exists
		$crawler = $client->request( 'GET', 'http://local.gdpr.be/gdpr-request-personal-data/' );
		$this->assertCount( 1, $crawler->filter( 'input[name=checkbox_gdpr]' ) );
		$this->assertCount( 1, $crawler->filter( 'input[name=gdpr_req]' ) );
		$this->assertCount( 1, $crawler->filter( 'input[name=email]' ) );

		return array( $client, $crawler );
	}

	/**
	 * @param $client
	 */
	public function add_comment( $client ) {
		$crawler = $client->request( 'GET', 'http://local.gdpr.be/2018/01/12/hello-world/' );
		$form    = $crawler->selectButton( 'Post Comment' )->form();
		//select checkbox
		$form['gdpr']->tick();
		$form->setValues(
			array(
				'email'   => 'test@email.com',
				"comment" => "this is very very important comment",
				"author"  => "Awesome Sebastian",
				"url"     => "",
			)
		);
		$crawler = $client->submit( $form );
	}
}
