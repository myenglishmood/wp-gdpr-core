<?php
/**
 * small form to use in table
 * to use in gdpr-template.php
 */
?>
<script>
$(".swa-confirm").on("click", function(e) {
    e.preventDefault();
    swal({
        title: $(this).data("swa-title"),
        text: $(this).data("swa-text"),
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#cc3f44",
        confirmButtonText: $(this).data("swa-btn-txt"),
        closeOnConfirm: true,
        html: false
    }, function( confirmed ) {
        if( confirmed )
            $(this).closest('form').submit();
    });
});
</script>
<form method="post" id="wgdpr_delete_comments_form">
    <input type="hidden"  name="gdpr_email" value="<?php echo $email; ?>">
    <button id="sa-warning" class="swa-confirm btn btn-primary waves-effect waves-light" name="send_gdp_del_request" value="<?php _e('Send delete request', 'wp_gdpr'); ?>"><i class="fa fa-trash m-r-5"></i>
    <?php _e('Send delete request', 'wp_gdpr'); ?>
    </button>
    <input type="hidden" name="mail_action" value="gdpr">
</form>
