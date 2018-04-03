<?php namespace wp_gdpr\view\admin;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <h2><?php _e('List of plugins that store data of users', 'wp_gdpr'); ?></h2>
    <div id="nav_menu">
        <a id="a_addons" href="<?php echo admin_url( 'admin.php?page=addon' ) ?>" >Available addons</a>
        <a id="a_plugins" class="active_tab" href="">Your plugins</a>
        <a id="a_settings" href="<?php echo admin_url( 'admin.php?page=settings' ) ?>">Settings</a>
        <a id="a_help" href="<?php echo admin_url( 'admin.php?page=help' ) ?>">Help</a>
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
    <?php
    use wp_gdpr\lib\Gdpr_Container;
    $controller = Gdpr_Container::make('wp_gdpr\controller\Controller_Menu_Page') ;
    ?>

    <?php $controller->build_table_with_plugins(); ?>
</div>



