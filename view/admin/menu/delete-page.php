<?php namespace wp_gdpr\view\admin;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <h2><?php _e( 'List of delete requests', 'wp_gdpr' ); ?></h2>
    <div id="nav_menu">
        <a id="a_delete" class="active_tab">Delete requests</a>
        <a id="a_datarequest">Data Requests</a>
        <a id="a_settings">Settings</a>
        <a id="a_help">Help</a>
        <a id="a_addon">Add-ons</a>
    </div>
    <div id="nav_menu_extra">
        <a id="a_review">Review our plugin</a>
        <a id="a_homepage">Visit our homepage</a>
    </div>
    <div id="user_info">
        <div class="user_info_header">
            <h3>What are delete requests?</h3>
            <button id="usr_info_header_btn">dismiss</button>
        </div>
        <div class="user_info_content">
            <img src="<?php echo GDPR_URL . 'assets/images/info.svg'; ?>">
            <p>Lorem ipsum dolor sit amet,
                et albucius oporteat ius, est eu etiam forensibus reformidans,
                ex novum eleifend sed. Te sea modo elaboraret, labore singulis te sit.
                His quod commodo definiebas no, vivendo consetetur definitionem te quo, usu oblique alienum convenire
                et.
                Sea in autem eripuit dignissim, nibh legimus mentitum ea usu. Nibh graece ne duo, stet iisque vim
                no.</p>
        </div>
    </div>
	<?php

	use wp_gdpr\lib\Gdpr_Container;

	$controller = Gdpr_Container::make( 'wp_gdpr\controller\Controller_Menu_Page' );
	?>

	<?php $controller->build_table_with_delete_requests(); ?>
</div>


