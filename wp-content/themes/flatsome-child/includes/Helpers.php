<?php

namespace MyTheme\Includes;

class Helpers
{
    static function check_can_add_to_cart($product)
    {
        $can_add_to_cart = get_field('can_add_to_cart', $product->id);
        if ((int) @$can_add_to_cart["value"] === _CAN_ADD_TO_CART) {
            return true;
        }
        return false;
    }

    static function handle_can_not_add_to_cart($product)
    {
        if (!Helpers::check_can_add_to_cart($product)) {
            $phone = get_option('_phone');
?>
            <a href="tel:<?= $phone ?>" class="_contact-buy-product single_add_to_cart_button button alt">LIÊN HỆ <?= $phone ?></a>
        <?php
            return true;
        }
        return false;
    }

    static function _render_check_type_product($page)
    {
        global $product;
        $check_type = get_field('check_type', $product->id);
        if (@$check_type['label']) {
        ?>
            <div class="badge-container absolute left top z-1 _check_type <?= $page == 'loop' ? '_loop' : '_single' ?>">
                <div class="callout badge badge-square">
                    <div class="badge-inner secondary on-sale"><span class="onsale"><?= @$check_type['label'] ?></span></div>
                </div>
            </div>
<?php
        }
    }

    static function _render_check_type_product_loop($page)
    {
        return Helpers::_render_check_type_product('loop');
    }

    static function _render_check_type_product_single($page)
    {
        return Helpers::_render_check_type_product('single');
    }
}
