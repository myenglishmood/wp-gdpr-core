<?php namespace wp_gdpr\view\admin;

use wp_gdpr\lib\Gdpr_Helper;

/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <h2><b><?php _e( 'Add-ons', 'wp_gdpr' ); ?></b> <?php _e( 'for your favourite plugins', 'wp_gdpr' ); ?></h2>
    <p align="center"><img class="a_background_img" src="<?php echo GDPR_URL . 'assets/images/logo-trans-bg.png'; ?>"></p>
    <div id="nav_menu">
        <a id="a_addon" class="active_tab" href="<?php echo admin_url( 'admin.php?page=addon' ) ?>"><span  class="dashicons dashicons-screenoptions"></span>Available add-ons</a>
        <a id="a_plugins" href="<?php echo admin_url( 'admin.php?page=pluginlist' ) ?>"><span
                    class="dashicons dashicons-admin-plugins"></span>&nbsp;Your plugins</a>
        <a id="a_settings" href="<?php echo admin_url( 'admin.php?page=settings' ) ?>"><span
                    class="dashicons dashicons-admin-generic"></span>&nbsp;Settings</a>
        <a id="a_help" href="<?php echo admin_url( 'admin.php?page=help' ) ?>"><span
                    class="dashicons dashicons-editor-help"></span>&nbsp;Help</a>
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

    <div id="user_info" class="postbox user_info">
        <div class="user_info_header">
            <h3>Why do I need add-ons?</h3>
            <button id="usr_info_header_btn">dismiss</button>
        </div>
        <br>
        <div class="user_info_content">
            <img class="a_info" src="<?php echo GDPR_URL . 'assets/images/icon-info-bg.png'; ?>">
            <p>Alot of plugins collect personal data. Because there is a big variety of plugins we created add-ons to
                make those plugins GDPR ready
                with our WP-GDPR plugin. If you still are not sure what this is check out our <a
                        href="<?php echo admin_url( 'admin.php?page=help' ) ?>"><b>Help page</b></a>
                or our <a href="https://wp-gdpr.eu/tutorials/" target="_blank"><b>Online tutorials</b></a>.</p>
        </div>
    </div>
    <div id="addons_box">
        <div class="gf_addon addon_box">
            <h4>Gravity Forms</h4>
            <img src="<?php echo GDPR_URL . 'assets/images/gravity-forms-logo.png'; ?>">
            <p>Gravity Forms is a forms plugin which stores entries.</p>
            <div class="gf_footer addon_footer">
                <button>Activate</button>
                <a class="more_inf" href="https://wp-gdpr.eu/add-ons/gravity-forms/">More info</a>
            </div>
        </div>
        <div class="cf_addon addon_box">
            <h4>Contact Form DB 7</h4>
            <img src="<?php echo GDPR_URL . 'assets/images/cfdb7-logo.png'; ?>">
            <p>CFDB7 is an add-on for Contact Form 7 to store entries.</p>
            <div class="cf_footer addon_footer">
                <button>Activate</button>
                <a class="more_inf" href="https://wp-gdpr.eu/add-ons/contact-form-db-7-addon/">More info</a>
            </div>
        </div>
        <div class="wc_addon addon_box">
            <h4>Woocommerce</h4>
            <img src="<?php echo GDPR_URL . 'assets/images/woo-logo.png'; ?>">
            <p>Woocommerce is a shopping platform on Wordpress.</p>
            <div class="wc_footer addon_footer">
                <button>Activate</button>
                <a class="more_inf" href="https://wp-gdpr.eu/add-ons/woocommerce-add-on/">More info</a>
            </div>
        </div>
        <div class="request_addon addon_box">
            <h4>Request an add-on</h4>
            <img src="<?php echo GDPR_URL . 'assets/images/gdpr-logo.png'; ?>">
            <p>Request your favourite plugin on our add-on page.</p>
            <div class="request_footer addon_footer">
                <a class="more_inf" href="https://wp-gdpr.eu/add-ons/">Visit the add-on page</a>
            </div>
        </div>
    </div>
</div>

<?php echo Gdpr_Helper::get_plugin_addon_status($plugin_addons) ?>

<p class="appsaloon_footer">WP-GDPR <?php echo Gdpr_Helper::get_core_version() ?> developed by <a
            href="https://appsaloon.be/"><b>Appsaloon</b></a></p>