<?php namespace wp_gdpr\view\admin;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <div id="nav_menu">
        <a id="a_delete" href="<?php echo admin_url('admin.php?page=deletelist')?>">Delete requests</a>
        <a id="a_datarequest" href="<?php echo admin_url('admin.php?page=wp_gdpr')?>">Data Requests</a>
        <a id="a_settings" href="<?php echo admin_url('admin.php?page=settings')?>" class="active_tab">Settings</a>
        <a id="a_help" href="<?php echo admin_url('admin.php?page=help')?>" >Help</a>
        <a target="_blank" id="a_addon" href="https://wp-gdpr.eu/add-ons/">Add-ons</a>
    </div>
	<?php

	use wp_gdpr\lib\Gdpr_Container;

	$controller = Gdpr_Container::make( 'wp_gdpr\controller\Controller_Menu_Page' );
	?>
    <h2><?php _e( 'Privacy policy setting', 'wp_gdpr' ); ?>
    </h2><?php $controller->build_form_to_add_privacy_policy_setting(); ?>

    <h2><?php _e( 'Settings:', 'wp_gdpr' ); ?></h2>
	<?php $controller->build_settings_table(); ?>

	<?php do_action( 'add_on_settings_menu_page' ); ?>
</div>


