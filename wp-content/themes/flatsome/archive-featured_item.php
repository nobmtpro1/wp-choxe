<?php
/**
 * Featured Item archive template.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

get_header(); ?>

<div class="portfolio-page-wrapper portfolio-archive page-featured-item">
	<?php get_template_part('template-parts/portfolio/archive-portfolio', flatsome_option('portfolio_archive_layout')); ?>
</div>

<?php get_footer(); ?>
