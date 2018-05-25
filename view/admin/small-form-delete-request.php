<?php
/**
 * small form to use in table
 * to use in gdpr-template.php
 */
?>
<form method="post" id="wgdpr_delete_comments_form">
    <input type="hidden"  name="gdpr_email" value="<?php echo $email; ?>">
    <button type="submit" class="btn btn-primary waves-effect waves-light" name="send_gdp_del_request" value="<?php _e('Send delete request', 'wp_gdpr'); ?>"><i class="fa fa-trash m-r-5"></i>
    <?php _e('Send delete request', 'wp_gdpr'); ?>
    </button>
    <input type="hidden" name="mail_action" value="gdpr">
</form>
