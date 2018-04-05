<?php namespace wp_gdpr\view\admin;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <h3><?php _e( 'On this page will come info and help for the plugin', 'wp_gdpr' ); ?></h3>
    <p align="center"><img class="a_background_img" src="<?php echo GDPR_URL . 'assets/images/logo-trans-bg.png'; ?>"></p>
    <div id="nav_menu">
        <a id="a_help" class="active_tab" href="<?php echo admin_url( 'admin.php?page=help' ) ?>"><span class="dashicons dashicons-editor-help"></span>&nbsp;Help</a>
        <a id="a_datarequest" href="<?php echo admin_url( 'admin.php?page=wp_gdpr' ) ?>"><span class="dashicons dashicons-admin-page"></span>System info</a>
        <a id="a_settings" href="<?php echo admin_url( 'admin.php?page=settings' ) ?>"><span class="dashicons dashicons-admin-generic"></span>&nbsp;Settings</a>
        <a target="_blank" id="a_addon" href="https://wp-gdpr.eu/add-ons/"><span><img class="a_icon" src="<?php echo GDPR_URL . 'assets/images/bliksem.svg'; ?>" style="width:20px; height=:auto;"></span>Add-ons</a>
    </div>
    <div id="nav_menu_extra">
        <a id="a_review" target="_blank" href="https://wordpress.org/support/plugin/wp-gdpr-core/reviews/#new-post"><span class="dashicons dashicons-admin-comments"></span>&nbsp;Review
            our plugin</a>
        <a id="a_homepage" target="_blank" href="https://wp-gdpr.eu/"><span class="dashicons dashicons-admin-home"></span>&nbsp;Visit our homepage</a>
    </div>
    <div id="user_guides">
        <div class="user_guides_header">
            <h4>Guide, Tutorials & Informative blogposts</h4>
        </div>
        <br>
        <div class="user_guides_content">
            <img class="a_info" src="<?php echo GDPR_URL . 'assets/images/icon-info-bg.png'; ?>">
            // carousel
        </div>
    </div>
    <div id="user_freq_questions">
        <div class="user_freq_questions_header">
            <h4>Frequently Asked Questions</h4>
        </div>


    </div>
    <div id="user_support">
        <div class="user_support_header">
            <h4>Support</h4>
        </div>
        <div class="user_support_content">

            <p align="center">Before you contact support, be sure to read our <a href="#user_freq_questions">FAQ</a> and check our
                <a href="">Guides & Tutorials.</a> Still need help? <b>Make sure to click on <a href="#"><span class="dashicons dashicons-admin-page"></span>System info</a> at the top to copy your information. ( Support will ask for it )</b></p>
            <img class="a_info" src="<?php echo GDPR_URL . 'assets/images/icon-support.png'; ?>">
            <div class="user_support_wp">
                <p>I need help for WP-GDPR core plugin.</p>
                <a class="button button-primary" href="https://wordpress.org/support/plugin/wp-gdpr-core">Support on wp.org</a>
            </div>
            <div class="user_support_premium">
                <p>I bought an add-on and need help..</p>
                <a class="button button-s" href="https://wp-gdpr.eu/support/">Premium Support form</a>
            </div>
        </div>


    </div>
</div>
<p class="appsaloon_footer">WP-GDPR 1.5 developed by <a href="https://appsaloon.be/"><b>Appsaloon</b></a></p>

