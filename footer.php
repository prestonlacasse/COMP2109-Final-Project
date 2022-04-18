<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer class="row">
		<div class="col-sm-12 col-md-3 col-lg-3"><?php dynamic_sidebar('footer_area_one'); ?></div>
		<div class="col-sm-12 col-md-3 col-lg-3"><?php dynamic_sidebar('footer_area_two'); ?></div>
		<div class="col-sm-12 col-md-3 col-lg-3"><?php dynamic_sidebar('footer_area_three'); ?></div>
		<div class="col-sm-12 col-md-3 col-lg-3"><?php dynamic_sidebar('footer_area_four'); ?></div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
