<?php
/**
 * form to update privacy policy link in admin page settings
 */
?>

<form method="post" action="" class="postbox" id="gdpr_admin_privacy_policy">
    <h3><?php _e('Settings for comment forms', 'wp_gdpr'); ?></h3>
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

    <h3><?php _e('Settings for personal data request page', 'wp_gdpr'); ?></h3>
    <div class="postbox-group">
        <label for="gdpr_priv_pov_text_data_request"><?php _e('Privacy policy text', 'wp_gdpr'); ?>:</label>
        <?php $args = array(
            'media_buttons' => false,
            'textarea_rows' => '3',
            'tinymce' => array(
                'plugins' => 'wordpress, wplink, wpdialogs',
                'theme_advanced_buttons1' => 'bold, italic, underline, strikethrough, forecolor, separator, bullist, numlist, separator, link, unlink, image',
                'theme_advanced_buttons2' => ''
            ),
            'quicktags' => array('buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,close'),
            'textarea_name'=>'gdpr_priv_pov_text_data_request',
        ); ?>

        <?php wp_editor(wp_unslash($privcy_policy_strings[3]), 'gdpr_priv_pov_text_data_request', $args); ?>

    </div>
    <input type="submit" class="button button-primary" name="gdpr_save_priv_pol_settings" value="<?php _e('Update privacy policy settings', 'wp_gdpr'); ?>">
</form>