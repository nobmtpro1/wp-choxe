<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see              https://docs.woocommerce.com/document/template-structure/
 * @package          WooCommerce\Templates
 * @version          4.7.0
 * @flatsome-version 3.16.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cat_style = get_theme_mod( 'cat_style', 'badge' );
$color     = '';
$text_pos  = '';

if ( $cat_style == 'overlay' || $cat_style == 'shade' ) {
	$color = 'dark';
}
if ( $cat_style == 'overlay' ) {
	$text_pos = 'box-text-middle text-shadow-5';
}
if ( $cat_style == 'badge' ) {
	$text_pos .= ' hover-dark';
}

$classes = array( 'product-category', 'col' );
?>
<div <?php wc_product_cat_class( $classes, $category ); ?>>
	<div class="col-inner">
		<?php
		/**
		 * The woocommerce_before_subcategory hook.
		 *
		 * @hooked woocommerce_template_loop_category_link_open - 10
		 */
		do_action( 'woocommerce_before_subcategory', $category );
		?>

		<div class="box box-<?php echo $cat_style; ?>  <?php echo $text_pos; ?> <?php echo $color; ?>">
			<div class="box-image">
				<?php
				/**
				 * The woocommerce_before_subcategory_title hook.
				 *
				 * @hooked woocommerce_subcategory_thumbnail - 10
				 */
				do_action( 'woocommerce_before_subcategory_title', $category );
				?>

				<?php if ( $cat_style == 'overlay' ) { ?>
					<div class="overlay"></div><?php } ?>
				<?php if ( $cat_style == 'shade' ) { ?>
					<div class="shade"></div><?php } ?>
			</div>
			<div class="box-text text-center">
				<div class="box-text-inner">
					<h5 class="uppercase header-title">
						<?php echo $category->name; ?>
					</h5>
					<?php if ( get_theme_mod( 'category_show_count', 1 ) ) : ?>
						<p class="is-xsmall uppercase count">
							<?php if ( $category->count > 0 ) {
								echo apply_filters( 'woocommerce_subcategory_count_html', $category->count . ' ' . ( $category->count > 1 ? __( 'Products', 'woocommerce' ) : __( 'Product', 'woocommerce' ) ), $category );
							}
							?>
						</p>
					<?php endif; ?>
					<?php
					/**
					 * The woocommerce_after_subcategory_title hook.
					 */
					do_action( 'woocommerce_after_subcategory_title', $category );
					?>
				</div>
			</div>
		</div>

		<?php
		/**
		 * The woocommerce_after_subcategory hook.
		 *
		 * @hooked woocommerce_template_loop_category_link_close - 10
		 */
		do_action( 'woocommerce_after_subcategory', $category );
		?>
	</div>
</div>
