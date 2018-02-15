<?php namespace wp_gdpr\view\admin;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
    <h2><?php _e('List of users that requested for information', 'wp_gdpr'); ?></h2>
	<?php
    use wp_gdpr\lib\Gdpr_Container;

    $controller = Gdpr_Container::make('wp_gdpr\controller\Controller_Menu_Page') ;
    $controller->build_table_with_requests();
    ?>
</div>


