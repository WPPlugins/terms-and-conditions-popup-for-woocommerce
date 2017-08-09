<div class="wrap">
<?php 
$dplugin_name = 'WooCommerce Terms and Conditions Popup';
$dplugin_link = 'http://berocket.com/product/woocommerce-terms-and-conditions-popup';
$dplugin_price = 16;
$dplugin_desc = '';
@ include 'settings_head.php';
@ include 'discount.php';
?>
<div class="wrap br_settings br_terms_cond_popup_settings show_premium">
    <div id="icon-themes" class="icon32"></div>
    <h2>Terms and Conditions Popup Settings</h2>
    <?php settings_errors(); ?>

    <h2 class="nav-tab-wrapper">
        <a href="#general" class="nav-tab nav-tab-active general-tab" data-block="general"><?php _e('General', 'BeRocket_terms_cond_popup_domain') ?></a>
        <a href="#css" class="nav-tab css-tab" data-block="css"><?php _e('CSS', 'BeRocket_terms_cond_popup_domain') ?></a>
    </h2>

    <form class="terms_cond_popup_submit_form" method="post" action="options.php">
        <?php 
        $options = BeRocket_terms_cond_popup::get_option(); ?>
        <div class="nav-block general-block nav-block-active">
            <table class="form-table license">
                <tr>
                    <th scope="row"><?php _e('Popup Width', 'BeRocket_terms_cond_popup_domain') ?></th>
                    <td>
                        <input name="br-terms_cond_popup-options[popup_width]" type="number" value="<?php echo $options['popup_width']; ?>">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Popup Height', 'BeRocket_terms_cond_popup_domain') ?></th>
                    <td>
                        <input name="br-terms_cond_popup-options[popup_height]" type="number" value="<?php echo $options['popup_height']; ?>">
                    </td>
                </tr>
            </table>
        </div>
        <div class="nav-block css-block">
            <table class="form-table license">
                <tr>
                    <th scope="row"><?php _e('Custom CSS', 'BeRocket_terms_cond_popup_domain') ?></th>
                    <td>
                        <textarea name="br-terms_cond_popup-options[custom_css]"><?php echo $options['custom_css']?></textarea>
                    </td>
                </tr>
            </table>
        </div>
        <input type="submit" class="button-primary" value="<?php _e('Save Changes', 'BeRocket_terms_cond_popup_domain') ?>" />
    </form>
</div>
<?php
$feature_list = array(
    'Agree and decline buttons on popup instead checkbox on page',
    'Timer before popup can be closed',
    'Customization for Terms and Conditions Popup',
    'Shortcode to add Terms and Conditions to any form',
);
@ include 'settings_footer.php';
?>
</div>
