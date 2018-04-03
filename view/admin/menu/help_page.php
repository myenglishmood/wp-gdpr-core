<?php namespace wp_gdpr\view\admin;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <h2><?php _e( 'On this page will come info and help for the plugin', 'wp_gdpr' ); ?></h2>
    <div id="nav_menu">
        <a id="a_delete" href="" class="active_tab">Help</a>
        <a id="a_datarequest" href="<?php echo admin_url( 'admin.php?page=wp_gdpr' ) ?>">System info</a>
        <a id="a_settings" href="<?php echo admin_url( 'admin.php?page=settings' ) ?>">Settings</a>
        <a target="_blank" id="a_addon" href="https://wp-gdpr.eu/add-ons/">Add-ons</a>
    </div>
    <div id="nav_menu_extra">
        <a id="a_review" target="_blank" href="https://wordpress.org/support/plugin/wp-gdpr-core/reviews/#new-post">Review
            our plugin</a>
        <a id="a_homepage" target="_blank" href="https://wp-gdpr.eu/">Visit our homepage</a>
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
    <div id="guids">
        <h4>Guids etc TODO</h4>
        <p>TODO here is carousel</p>
    </div>
    <div id="freq_questions"></div>
    <div id="support"></div>
</div>


