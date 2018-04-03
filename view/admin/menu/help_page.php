<?php namespace wp_gdpr\view\admin;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <h2><?php _e('On this page will come info and help for the plugin', 'wp_gdpr'); ?></h2>
    <div id="nav_menu">
        <a id="a_delete" href="<?php echo admin_url('admin.php?page=deletelist')?>">Delete requests</a>
        <a id="a_datarequest" href="<?php echo admin_url('admin.php?page=wp_gdpr')?>">Data Requests</a>
        <a id="a_settings" href="<?php echo admin_url('admin.php?page=settings')?>">Settings</a>
        <a id="a_help" href="<?php echo admin_url('admin.php?page=help')?>" class="active_tab">Help</a>
        <a target="_blank" id="a_addon" href="https://wp-gdpr.eu/add-ons/">Add-ons</a>
    </div>
</div>


