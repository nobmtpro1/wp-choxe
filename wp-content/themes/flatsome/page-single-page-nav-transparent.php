<?php
/**
 * Template name: Page - Single Page Nav - Transparent Header
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

get_header(); ?>

<?php do_action( 'flatsome_before_page' ); ?>

<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>
</div>

<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>
