<?php namespace wp_gdpr\view\admin;
use wp_gdpr\lib\Gdpr_Helper;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <h3><b><?php _e( 'Information', 'wp_gdpr' ); ?></b> <?php _e( 'on how to get you GDPR ready!', 'wp_gdpr' ); ?></h3>
    <p align="center"><img class="a_background_img" src="<?php echo GDPR_URL . 'assets/images/logo-trans-bg.png'; ?>">
    </p>
    <div id="nav_menu">
        <a id="a_help" class="active_tab" href="<?php echo admin_url( 'admin.php?page=help' ) ?>"><span
                    class="dashicons dashicons-editor-help"></span>&nbsp;Help</a>
<!--    Not for v1.5!!!     <a id="a_datarequest" href="--><?php //echo admin_url( 'admin.php?page=wp_gdpr' ) ?><!--"><span-->
<!--                    class="dashicons dashicons-admin-page"></span>System info</a>-->
        <a id="a_settings" href="<?php echo admin_url( 'admin.php?page=settings_wp-gdpr' ) ?>"><span
                    class="dashicons dashicons-admin-generic"></span>&nbsp;Settings</a>
        <a id="a_addon" href="<?php echo admin_url( 'admin.php?page=addon' ) ?>"><span class="dashicons dashicons-screenoptions"></span> Add-ons</a>
    </div>
    <div id="nav_menu_extra">
        <a id="a_review" target="_blank"
           href="https://wordpress.org/support/plugin/wp-gdpr-core/reviews/#new-post"><span
                    class="dashicons dashicons-admin-comments"></span>&nbsp;Review
            our plugin</a>
        <a id="a_homepage" target="_blank" href="https://wp-gdpr.eu/"><span
                    class="dashicons dashicons-admin-home"></span>&nbsp;Visit our homepage</a>
    </div>
    <br>
    <div id="user_guides">
        <div class="user_guides_header">
            <h4>Guide, Tutorials & Informative blogposts</h4>
        </div>
        <br>
        <div class="user_guides_content">
            <img class="a_info" src="<?php echo GDPR_URL . 'assets/images/icon-info-bg.png'; ?>">
            <section class="variable slider">
	            <?php $plugins = Gdpr_Helper::get_plugin_addon_status($plugin_addons);
	            if (is_array($plugins) && count( $plugins ) != 0) :
		            foreach ($plugins as $plugin_data ): ?>
                        <div><a href="<?php echo $plugin_data['plugin_tutorial_link'] ?>" target="_blank"><img class="carousel_img" src="<?php echo $plugin_data['plugin_tutorial_img'] ?>" alt="Tutorial - Install WP GDPR for <?php echo $plugin_data['name'] ?>">
                                <p align="center"><?php echo $plugin_data['plugin_tutorial_intro'] ?></p></a>
                        </div>
		            <?php endforeach;
	            endif; ?>

            </section>
        </div>
    </div>
    <div id="user_freq_questions">
        <div class="user_freq_questions_header">
            <h4>Frequently Asked Questions</h4>
            <div id="accordion">
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>How do I install the WP-GDPR Core plugin?</h4>
                <div class="accordion-content">
                    <ol>
                        <li>Upload the plugin files to the /wp-content/plugins, or install the plugin trough th WordPress plugins screen directly.</li>
                        <li>Activate the plugin through the 'Plugins' screen in WordPress.</li>
                        <li>'WP GDPR' will be created in the admin menu where you can view requests & settings.</li>
                        <li>The page 'GDPR - Request personal data' will be created automatically. This page displays the form where visitors can submit their request.</li>
                    </ol>
                </div>
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>What does the WP-GDPR Core plugin do exactly?</h4>
                <div class="accordion-content">
                    <p>Our core plugin makes your WordPress GDPR compliant by providing a platform where all personal data can be collected and an automatic system for users to access that data securely. Features (as of v 1.4.4) are :</p>
                    <ul>
                        <li>
                            Automatically create a request page with the shortcode [ REQ_CRED_FORM ]
                        <ul>
                            <li>
                                Users can enter their emailaddress in this form to request access to their personal data
                            </li>
                        </ul>
                        </li>
                        <li>
                            Secure access link emailed to the user to access their personal data
                        </li>
                        <li>
                            Apply the consent box to all WordPress comments
                        </li>
                        <li>
                            Gather all data from WordPress comments to be included in the personal data register
                        </li>
                        <li>
                            User tools while accessing their personal data :
                            <ul>
                                <li>
                                    View their personal data
                                </li>
                                <li>
                                    Download their personal data
                                </li>
                                <li>
                                    Update their personal data
                                </li>
                                <li>
                                    Request to delete their personal data

                                </li>
                            </ul>
                        </li>
                        <li>
                            Admin views for :
                            <ul>
                                <li>
                                    List all requested access and resend mails
                                </li>
                                <li>
                                    List of all request for deletion and perform the action ( delete or anonymize )
                                </li>
                            </ul>
                        </li>
                        <li>
                            Settings page for the consent box content

                        </li>
                        <li>
                            Email address for DPO
                        </li>
                        <li>
                            List of all plugins that use personal data
                        </li>
                    </ul>
                </div>
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>What is the DPO Email address for?</h4>
                <div class="accordion-content">
                    <p>
                        The DPO or Data Protection Officer is the person handling all GDPR issues for the organisation.
                        Entering an email address on the settings page will make sure all access & delete requests are mailed to the DPO.
                    </p>

                </div>
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>When do i need to ask for consent?</h4>
                <div>
                    <p>
                        Every form on your website that asks for <a href="https://ec.europa.eu/info/law/law-topic/data-protection/reform/what-personal-data_en" target="_blank"><b>personal data</b></a> needs to have a clear consent of the user.
                        More info on the subject van be found <a href="https://www.itgovernance.eu/blog/en/gdpr-when-do-you-need-to-seek-consent/" target="_blank"><b>here</b></a>.
                    </p>
                </div>
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>Which articles in the GDPR law dous the plugin cover?</h4>
                <div class="accordion-content">
                    <ul>
                        <li>
                            Users can view their data ( Art 15 GDPR )
                        </li>
                        <li>
                            Users can adapt their personal data ( Art 16 GDPR )
                        </li>
                        <li>
                            Users can download their personal data ( Art 20 GDPR )
                        </li>
                        <li>
                            Users can request to delete their data ( Art 17 GDPR )
                        </li>
                    </ul>
                </div>
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>Does WP-GDPR make my hole company GDPR Compliant?</h4>
                <div class="accordion-content">
                    <p>
                        As stated on our website we are not lawyers, we are WordPress developers that followed courses on GDPR. Our company is GDPR Compliant and through our plugin we try to make life easier for website owners.
                        The features we implement in our plugin and add-ons are created to be compliant with several articles of the GDPR law, but we always advise to consult a lawyer to make sure your whole business is compliant with the GDPR law.
                    </p>
                </div>
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>Where do I need to display the link to my Privacy Policy?</h4>
                <div class="accordion-content">
                    <p>
                        Generally the link to your Privacy Policy is displayed in your websites footer.
                    </p>
                </div>
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>What information should be displayed in my Privacy Policy?</h4>
                <div class="accordion-content">
                    <p>
                        As per the GDPR , the information you provide to people about how you process their personal data has to be :
                    </p>
                    <ul>
                        <li>
                            Free of charge
                        </li>
                        <li>
                            Transparant, intelligible, easily accessible & concise

                        </li>
                        <li>
                            The writing should be clear & in plain language, particularly if addressing a child
                        </li>
                    </ul>
                    <p>
                        It's necessary to provide the link to the access request page in your Privacy Policy.
                        For a good example of a Privacy Statement click <a href="https://ec.europa.eu/taxation_customs/about/privacy-statement-internet-website-commissions-taxation-customs-union-directorategeneral_en" target="_blank"><b>here</b></a>.
                    </p>
                </div>
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>I have a support question, where do i go?</h4>
                <div class="accordion-content">
                    <p>
                        We encourage all users of the WP-GDPR core and all its support questions related to this plugin make a support thread at our wordpress.org support page.
                    </p>
                </div>
            </div>
        </div>


    </div>
    <div id="user_support">
        <div class="user_support_header">
            <h4>Support</h4>
        </div>
        <div class="user_support_content">
            <p align="center">Before you contact support, be sure to read our <a href="#user_freq_questions">FAQ</a> and
                check our
                <a href="">Guides & Tutorials.</a></p>
<!--    Not for v1.5!!!         <p align="center">Still need help? <b>Make sure to click on <a href="#"><span-->
<!--                                class="dashicons dashicons-admin-page"></span>System info</a> at the top to copy your-->
<!--                    information. ( Support will ask for it )</b></p>-->
            <div class="users_support_btn_group">
                <div class="user_support_wp">
                    <p>I need help for WP-GDPR core plugin.</p>
                    <a class="button button-primary" target="_blank" href="https://wordpress.org/support/plugin/wp-gdpr-core">Support on
                        wordpress.org</a>
                </div>
                <div class="user_support_premium">
                    <p>I bought an add-on and need help..</p>
                    <a class="button button-succes" target="_blank" href="https://wp-gdpr.eu/support/">Premium Support Tickets</a>
                </div>
            </div>
        </div>
        <img class="a_support" src="<?php echo GDPR_URL . 'assets/images/icon-support.png'; ?>">
    </div>
</div>
<p class="appsaloon_footer">WP-GDPR <?php echo Gdpr_Helper::get_core_version() ?> developed by <a
            href="https://appsaloon.be/"><b>Appsaloon</b></a></p>
