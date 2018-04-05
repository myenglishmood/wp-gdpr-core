<?php namespace wp_gdpr\view\admin;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <h3><?php _e( 'On this page will come info and help for the plugin', 'wp_gdpr' ); ?></h3>
    <p align="center"><img class="a_background_img" src="<?php echo GDPR_URL . 'assets/images/logo-trans-bg.png'; ?>">
    </p>
    <div id="nav_menu">
        <a id="a_help" class="active_tab" href="<?php echo admin_url( 'admin.php?page=help' ) ?>"><span
                    class="dashicons dashicons-editor-help"></span>&nbsp;Help</a>
        <a id="a_datarequest" href="<?php echo admin_url( 'admin.php?page=wp_gdpr' ) ?>"><span
                    class="dashicons dashicons-admin-page"></span>System info</a>
        <a id="a_settings" href="<?php echo admin_url( 'admin.php?page=settings' ) ?>"><span
                    class="dashicons dashicons-admin-generic"></span>&nbsp;Settings</a>
        <a target="_blank" id="a_addon" href="https://wp-gdpr.eu/add-ons/"><span><img class="a_icon"
                                                                                      src="<?php echo GDPR_URL . 'assets/images/bliksem.svg'; ?>"
                                                                                      style="width:20px; height=:auto;"></span>Add-ons</a>
    </div>
    <div id="nav_menu_extra">
        <a id="a_review" target="_blank"
           href="https://wordpress.org/support/plugin/wp-gdpr-core/reviews/#new-post"><span
                    class="dashicons dashicons-admin-comments"></span>&nbsp;Review
            our plugin</a>
        <a id="a_homepage" target="_blank" href="https://wp-gdpr.eu/"><span
                    class="dashicons dashicons-admin-home"></span>&nbsp;Visit our homepage</a>
    </div>
    <div id="user_guides">
        <div class="user_guides_header">
            <h4>Guide, Tutorials & Informative blogposts</h4>
        </div>
        <br>
        <div class="user_guides_content">
            <img class="a_info" src="<?php echo GDPR_URL . 'assets/images/icon-info-bg.png'; ?>">
            <div class="multiple-items">
                <div><img class="carousel_img" src="<?php echo GDPR_URL . 'assets/images/icon-info-bg.png'; ?>">
                    <p>auris mauris ante, blandit et, ultrices a,1</p></div>
                <div><img class="carousel_img" src="<?php echo GDPR_URL . 'assets/images/icon-info-bg.png'; ?>">
                    <p>auris mauris ante, blandit et, ultrices a,2</p></div>
                <div><img class="carousel_img" src="<?php echo GDPR_URL . 'assets/images/icon-info-bg.png'; ?>">
                    <p>auris mauris ante, blandit et, ultrices a,3</p></div>
                <div><img class="carousel_img" src="<?php echo GDPR_URL . 'assets/images/icon-info-bg.png'; ?>">
                    <p>auris mauris ante, blandit et, ultrices a,4</p></div>
                <div><img class="carousel_img" src="<?php echo GDPR_URL . 'assets/images/icon-info-bg.png'; ?>">
                    <p>auris mauris ante, blandit et, ultrices a,5</p></div>
                <div><img class="carousel_img" src="<?php echo GDPR_URL . 'assets/images/icon-info-bg.png'; ?>">
                    <p>auris mauris ante, blandit et, ultrices a,6</p></div>
            </div>
        </div>
    </div>
    <div id="user_freq_questions">
        <div class="user_freq_questions_header">
            <h4>Frequently Asked Questions</h4>
            <div id="accordion">
                <h4>Section 1</h4>
                <div>
                    <p>
                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                    </p>
                </div>
                <h4>Section 2</h4>
                <div>
                    <p>
                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                        suscipit faucibus urna.
                    </p>
                </div>
                <h4>Section 3</h4>
                <div>
                    <p>
                        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                        Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                        ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                        lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                    </p>
                    <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                    </ul>
                </div>
                <h4>Section 4</h4>
                <div>
                    <p>
                        Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                        et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                        faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                        mauris vel est.
                    </p>
                    <p>
                        Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                        inceptos himenaeos.
                    </p>
                </div>
            </div>
        </div>


    </div>
    <div id="user_support">
        <div class="user_support_header">
            <h4>Support</h4>
        </div>
        <!--        <img class="a_info" src="--><?php //echo GDPR_URL . 'assets/images/icon-support.png';
		?><!--">-->
        <div class="user_support_content">
            <p>Before you contact support, be sure to read our <a href="#user_freq_questions">FAQ</a> and
                check our
                <a href="">Guides & Tutorials.</a> Still need help? <b>Make sure to click on <a href="#"><span
                                class="dashicons dashicons-admin-page"></span>System info</a> at the top to copy your
                    information. ( Support will ask for it )</b></p>
            <div class="users_support_btn_group">
                <div class="user_support_wp">
                    <p>I need help for WP-GDPR core plugin.</p>
                    <a class="button button-primary" href="https://wordpress.org/support/plugin/wp-gdpr-core">Support on
                        wp.org</a>
                </div>
                <div class="user_support_premium">
                    <p>I bought an add-on and need help..</p>
                    <a class="button button-succes" href="https://wp-gdpr.eu/support/">Premium Support form</a>
                </div>
            </div>
        </div>


    </div>
</div>
<p class="appsaloon_footer">WP-GDPR 1.5 developed by <a href="https://appsaloon.be/"><b>Appsaloon</b></a></p>

<?php var_dump(get_plugin_data(GDPR_DIR .'wp-gdpr-core.php'))  ?>
