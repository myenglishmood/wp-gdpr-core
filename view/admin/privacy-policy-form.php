<?php
/**
 * form to update privacy policy link in admin page settings
 */
?>

<form method="post" action="" class="postbox" id="gdpr_admin_privacy_policy">
    <div class="postbox-group">
        <label for="gdpr_priv_pov_label"><?php _e('Privacy policy label', 'wp_gdpr'); ?>:</label>
        <textarea name="gdpr_priv_pov_label"><?php echo $privcy_policy_strings[0]; ?></textarea>
    </div>
    <div class="postbox-group">
        <label for="gdpr_priv_pov_text"><?php _e('Privacy policy text', 'wp_gdpr'); ?>:</label>
        <?php $args = array(
            'media_buttons' => false,
            'textarea_rows' => '3',
            'tinymce' => array(
                'plugins' => 'wordpress, wplink, wpdialogs',
                'theme_advanced_buttons1' => 'bold, italic, underline, strikethrough, forecolor, separator, bullist, numlist, separator, link, unlink, image',
                'theme_advanced_buttons2' => ''
            ),
            'quicktags' => array('buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,close'),
            'textarea_name'=>'gdpr_priv_pov_text',
        ); ?>

        <?php wp_editor(wp_unslash($privcy_policy_strings[1]), 'gdpr_priv_pov_text', $args); ?>

    </div>
    <div class="postbox-group">
        <label for="gdpr_priv_pov_checkbox"><?php _e('Privacy policy checkbox', 'wp_gdpr'); ?>:</label>
        <textarea name="gdpr_priv_pov_checkbox"><?php echo $privcy_policy_strings[2]; ?></textarea>
    </div>
    <input type="submit" class="button button-primary" name="gdpr_save_priv_pol_settings" value="<?php _e('Update privacy policy settings', 'wp_gdpr'); ?>">
</form>