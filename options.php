<div class="wrap sitemap">
    <div class="postbox">
        <h2><?php _e('SiteMap Options', 'sitemap-widget'); ?></h2>
        <form method='post' action='options.php'>
            <?php wp_nonce_field('update-options'); ?>
            <?php settings_fields('cc-sitemap-option-group'); ?>
            <table class="form-table">
                <tbody id="first_section">

                   
     
                    <tr valign="top">
                        <th scope="row"><strong><?php _e('Click yes if you want to have a sitemap widget on your board', 'sitemap-widget'); ?></strong></th>
                        <td><input type="checkbox"  name="cc-sitemap" value="Yes"<?php echo get_option('cc-sitemap') ? 'checked="checked"' : ''; ?>/>  Yes</td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><strong><?php _e('Click on the item you want to display', 'sitemap-widget'); ?></strong></th>

                        <td><input type="checkbox"  name="cc-sitemap-page" value="<?php _e('Page', 'sitemap-widget');?>"<?php echo get_option('cc-sitemap-page') ? 'checked="checked"' : ''; ?>/><?php _e('Page', 'sitemap-widget');?></td>
                        <td><input type="checkbox"  name="cc-sitemap-categories" value="<?php  _e('Category', 'sitemap-widget');?>"<?php echo get_option('cc-sitemap-categories') ? 'checked="checked"' : ''; ?>/><?php  _e('Category', 'sitemap-widget');?></td>
                        <td><input type="checkbox"  name="cc-sitemap-post" value="<?php _e('Post', 'sitemap-widget');?>"<?php echo get_option('cc-sitemap-post') ? 'checked="checked"' : ''; ?>/><?php _e('Post', 'sitemap-widget');?></td>                    
                    </tr>
                </tbody>

                <tr valign="top">
                    <td colspan="2"><input type="hidden" name="action" value="update" /><?php submit_button(); ?></td>
                </tr>
            </table>
        </form>
       
       
    </div>
    <div class="postbox">
        <p><?php _e('If this plugin has helped you out at all, please consider making a donation to encourage future updates.', 'sitemap-widget'); ?><br /><?php _e('Your generosity is appreciated!', 'sitemap-widget'); ?></p>
        <a href="#" onclick="window.open('https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=43XMASQSUE4YE');">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" width="147" height="47">
        </a>
        <p><?php _e('To report any issues with', 'sitemap-widget'); ?><strong>&nbsp;<?php _e('this plugin', 'sitemap-widget'); ?></strong><?php _e(', please visit the', 'sitemap-widget'); ?> <a href="http://wordpress.org/support/plugin/sitemap"><?php _e('support page on WordPress.org', 'sitemap-widget'); ?></a>.</p>
        <p><?php _e('For all other WordPress help, please check out some great tutorials at', 'sitemap-widget'); ?> <a href="https://copier-coller.com/"><?php _e('copier-coller.com', 'sitemap-widget'); ?></a></p>

    </div>
</div>