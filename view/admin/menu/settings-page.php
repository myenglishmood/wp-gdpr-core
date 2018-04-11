<?php namespace wp_gdpr\view\admin;
use wp_gdpr\lib\Gdpr_Helper;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <h2><?php _e( 'Privacy policy setting', 'wp_gdpr' ); ?></h2>
    <p align="center"><img class="a_background_img" src="<?php echo GDPR_URL . 'assets/images/logo-trans-bg.png'; ?>"></p>
    <div id="nav_menu">
        <a id="a_settings" href="<?php echo admin_url('admin.php?page=settings_wp-gdpr')?>" class="active_tab"><span class="dashicons dashicons-admin-generic"></span>&nbsp;Settings</a>
        <a id="a_help" href="<?php echo admin_url('admin.php?page=help')?>"><span class="dashicons dashicons-editor-help"></span>&nbsp;Help</a>
        <a id="a_addon" href="<?php echo admin_url( 'admin.php?page=addon' ) ?>"><span class="dashicons dashicons-screenoptions"></span>&nbsp;Add-ons</a>
    </div>
    <div id="nav_menu_extra">
        <a id="a_review" target="_blank" href="https://wordpress.org/support/plugin/wp-gdpr-core/reviews/#new-post"><span class="dashicons dashicons-admin-comments"></span>&nbsp;Review
            our plugin</a>
        <a id="a_homepage" target="_blank" href="https://wp-gdpr.eu/"><span class="dashicons dashicons-admin-home"></span>&nbsp;Visit our homepage</a>
    </div>
    <br>
	<?php

	use wp_gdpr\lib\Gdpr_Container;

	$controller = Gdpr_Container::make( 'wp_gdpr\controller\Controller_Menu_Page' );
	?>
    <?php $controller->build_form_to_add_privacy_policy_setting(); ?>

    <h2><?php _e( 'Settings:', 'wp_gdpr' ); ?></h2>
	<?php $controller->build_settings_table(); ?>

	<?php do_action( 'add_on_settings_menu_page' ); ?>
</div>
<p class="appsaloon_footer">WP-GDPR <?php echo Gdpr_Helper::get_core_version() ?> developed by <a
            href="https://appsaloon.be/"><b>Appsaloon</b></a></p>