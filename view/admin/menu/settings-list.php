<div class="postbox">
    <table>
        <form method="post">
			<?php
			foreach ( $options as $options_name => $option ) {
				switch ( $options_name ) {
					case 'switch_on_comments':
						echo '<tr>';
						echo sprintf( '<td><label for="%s">%s</label></td>', $options_name, $option['label'] );
						echo sprintf( '<td><input type="checkbox" %s name="%s"></input></td>', $option['value'], $options_name );
						echo '</tr>';
						break;
				}
			}
			?>
            <tfoot>
            <tr>
                <td rowspan="2">
                    <input type="submit" class="button button-primary" name="gdpr_save_global_settings"
                           value="<?php _e( 'Update settings', 'wp_gdpr' ); ?>">
                </td>
            </tr>
            </tfoot>
        </form>
    </table>
</div>
