<?php
/**
 *  FORM to send request for access to data about user
 */
?>
<?php if ( 'GET' == $_SERVER['REQUEST_METHOD'] ): ?>
    <form action="" method="post">
        <?php _e('Email', 'wp_gdpr'); ?>:<br>
        <input type="email" name="email" value="" required>
        <br><br>
            <input type="checkbox" name="checkbox_gdpr" required>
            <label for="checkbox_gdpr">
                <?php echo wp_unslash($privcy_policy_strings[3]); ?>
            </label>
        <br><br>
        <input type="hidden" name="gdpr_translation" value="<?php echo $pieces; ?>">
        <input type="submit" name="gdpr_req" value="<?php _e('Submit', 'wp_gdpr'); ?>">
    </form>
<?php  else: ?>
    <h3><?php _e('Thank You! We will send you email in 48h.', 'wp_gdpr'); ?></h3>
<?php endif; ?>
