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
        <a id="a_datarequest" href="<?php echo admin_url( 'admin.php?page=wp_gdpr' ) ?>"><span
                    class="dashicons dashicons-admin-page"></span>System info</a>
        <a id="a_settings" href="<?php echo admin_url( 'admin.php?page=settings' ) ?>"><span
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
    <div id="user_guides">
        <div class="user_guides_header">
            <h4>Guide, Tutorials & Informative blogposts</h4>
        </div>
        <br>
        <div class="user_guides_content">
            <img class="a_info" src="<?php echo GDPR_URL . 'assets/images/icon-info-bg.png'; ?>">
            <img src="https://wp-gdpr.eu/wp-content/uploads/2018/03/installcore-1-300x201.jpg" alt="">
            <div class="multiple-items">
                <div><img class="carousel_img" src="//wp-gdpr.eu/wp-content/uploads/2018/03/installcore-1-300x201.jpg" alt="Tutorial - Install WP GDPR Core - Step 1, Add new plugin">
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
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>What
                    information does the plugin track?</h4>
                <div>
                    <p>
                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                    </p>
                </div>
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>How
                    can my users get access to their personal data?</h4>
                <div>
                    <p>
                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                        suscipit faucibus urna.
                    </p>
                </div>
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>Where
                    do I need to display the link to my Privacy Policy?</h4>
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
                <h4><span><img src="<?php echo GDPR_URL . 'assets/images/icon_arrow.png'; ?>" alt="" class="icon_arrow"></span>If
                    I have a form where I dont ask for personal data, do I need enable the GDPR checkbox?</h4>
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
        <div class="user_support_content">
            <p align="center">Before you contact support, be sure to read our <a href="#user_freq_questions">FAQ</a> and
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
        <img class="a_support" src="<?php echo GDPR_URL . 'assets/images/icon-support.png'; ?>">
    </div>
</div>
<p class="appsaloon_footer">WP-GDPR <?php echo Gdpr_Helper::get_core_version() ?> developed by <a
            href="https://appsaloon.be/"><b>Appsaloon</b></a></p>
