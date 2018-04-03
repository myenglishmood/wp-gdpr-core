<?php namespace wp_gdpr\view\admin;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <h2><?php _e('List of users that requested for information', 'wp_gdpr'); ?></h2>
    <div id="nav_menu">
        <a id="a_delete" href="<?php echo admin_url('admin.php?page=deletelist')?>">Delete requests</a>
        <a id="a_datarequest" href="<?php echo admin_url('admin.php?page=wp_gdpr')?>" class="active_tab">Data Requests</a>
        <a id="a_settings" href="<?php echo admin_url('admin.php?page=settings')?>">Settings</a>
        <a id="a_help" href="<?php echo admin_url('admin.php?page=help')?>">Help</a>
        <a target="_blank" id="a_addon" href="https://wp-gdpr.eu/add-ons/">Add-ons</a>
    </div>
    <div id="nav_menu_extra">
        <a id="a_review" target="_blank" href="https://wordpress.org/support/plugin/wp-gdpr-core/reviews/#new-post">Review our plugin</a>
        <a id="a_homepage" target="_blank" href="https://wp-gdpr.eu/">Visit our homepage</a>
    </div>
	<?php
    use wp_gdpr\lib\Gdpr_Container;

    $controller = Gdpr_Container::make('wp_gdpr\controller\Controller_Menu_Page') ;
    $controller->build_table_with_requests();
    ?>
</div>


