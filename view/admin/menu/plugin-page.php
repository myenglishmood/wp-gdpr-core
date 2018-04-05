<?php namespace wp_gdpr\view\admin;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <h2><?php _e('List of plugins that store data of users', 'wp_gdpr'); ?></h2>
    <div id="nav_menu">
        <a id="a_addons" href="<?php echo admin_url( 'admin.php?page=addon' ) ?>" >Available addons</a>
        <a id="a_plugins" class="active_tab" href=""><span class="dashicons dashicons-admin-plugins"></span>&nbsp;Your plugins</a>
        <a id="a_settings" href="<?php echo admin_url( 'admin.php?page=settings' ) ?>"><span class="dashicons dashicons-admin-generic"></span>&nbsp;Settings</a>
        <a id="a_help" href="<?php echo admin_url( 'admin.php?page=help' ) ?>"><span class="dashicons dashicons-editor-help"></span>&nbsp;Help</a>
    </div>
    <div id="nav_menu_extra">
        <a id="a_review" target="_blank" href="https://wordpress.org/support/plugin/wp-gdpr-core/reviews/#new-post"><span class="dashicons dashicons-admin-comments"></span>&nbsp;Review
            our plugin</a>
        <a id="a_homepage" target="_blank" href="https://wp-gdpr.eu/"><span class="dashicons dashicons-admin-home"></span>&nbsp;Visit our homepage</a>
    </div>
    <div id="user_info" class="postbox">
        <div class="user_info_header">
            <h3>What are plugins that store personal data?</h3>
            <button id="usr_info_header_btn">dismiss</button>
        </div>
        <hr>
        <div class="user_info_content">
            <img src="<?php echo GDPR_URL . 'assets/images/info.svg'; ?>" style="width: 100px; height: auto;">
            <p style="width: 80%;">On this page you can find a list of plugins installed on your website that store personal data.
            Make sure all personal data stored is handled by our plugin by installing the add-on you need.
            If you still are not sure what this is check out our <a href="<?php echo admin_url( 'admin.php?page=help' ) ?>"><b>Help page</b></a>
            or our <a href="https://wp-gdpr.eu/tutorials/" target="_blank"><b>Online tutorials</b></a>.</p>
        </div>
    </div>
    <?php
    use wp_gdpr\lib\Gdpr_Container;
    $controller = Gdpr_Container::make('wp_gdpr\controller\Controller_Menu_Page') ;
    ?>

    <?php $controller->build_table_with_plugins(); ?>
</div>



