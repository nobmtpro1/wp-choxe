<?php

use MyTheme\Includes\Helpers;

require_once 'includes/Helpers.php';

define('_THEME_DIR', __DIR__);
define('_CAN_NOT_ADD_TO_CART', 0);
define('_CAN_ADD_TO_CART', 1);

function add_to_head()
{
?>

    <?php
}
add_action('wp_head', 'add_to_head', 0);

// add fields to settings general
function my_custom_field_callback()
{
    echo '<input name="_phone" value="' . get_option('_phone') . '" />';
}

function add_my_custom_section_to_settings()
{
    register_setting('general', '_phone');
    add_settings_field(
        '_phone',
        'Phone',
        'my_custom_field_callback',
        'general',
    );
}
add_action('admin_init', 'add_my_custom_section_to_settings');


add_action('woocommerce_before_shop_loop_item', [Helpers::class, '_render_check_type_product_loop'], 1);
add_action('woocommerce_single_product_summary', [Helpers::class, '_render_check_type_product_single'], 1);
