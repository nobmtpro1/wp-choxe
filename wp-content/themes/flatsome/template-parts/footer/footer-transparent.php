<?php
/**
 * Transparent footer.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

?>
<div class="absolute-footer fixed dark nav-dark text-center">
		<div class="footer-primary">
				<div class="copyright-footer">
					<?php if(flatsome_option('footer_left_text')) { echo do_shortcode(flatsome_option('footer_left_text'));} ?>
				</div>
		</div>
</div>
