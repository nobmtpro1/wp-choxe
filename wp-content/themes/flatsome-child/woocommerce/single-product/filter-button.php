<?php
/**
 * Product filter button.
 *
 * @package          Flatsome/WooCommerce/Templates
 * @flatsome-version 3.16.0
 */

$custom_filter_text = get_theme_mod( 'category_filter_text' );
$filter_text = $custom_filter_text ? $custom_filter_text : __( 'Filter', 'woocommerce' );
?>
<div class="category-filtering container text-center product-filter-row show-for-medium">
  <a href="#product-sidebar"
    data-open="#product-sidebar"
    data-pos="left"
    class="filter-button uppercase plain">
      <i class="icon-equalizer"></i>
      <strong><?php echo $filter_text ?></strong>
  </a>
</div>
