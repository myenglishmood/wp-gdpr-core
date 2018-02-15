<?php namespace wp_gdpr\view\admin;
/**
 * this template is to show manu page in admin-menu
 */
?>
<div class="wrap">
<?php
    use wp_gdpr\lib\Gdpr_Container;
    $controller = Gdpr_Container::make('wp_gdpr\controller\Controller_Menu_Page') ;
?>

    <h2><?php _e('List of delete requests', 'wp_gdpr'); ?></h2>
    <?php $controller->build_table_with_delete_requests(); ?>
</div>


