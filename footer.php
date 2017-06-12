<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LiveGrey
 */

?>

	<footer>
		<div class="row">
			<div class="large-4 medium-4 columns">
				<!-- <form>
					<input type="text" class="subscribe-field mail-check text-center" name="" placeholder="sign up for our newsletter">
				</form> -->
				<?php echo do_shortcode('[contact-form-7 id="89" title="Newsletter"]'); ?>
			</div>
			<div class="large-8 medium-8 columns">
				<div class="social-links">
					<a href="<?php echo get_field('facebook_url', 'option');?>">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="<?php echo get_field('instagram_url', 'option');?>">
						<i class="fa fa-instagram"></i>
					</a>
					<a href="<?php echo get_field('twitter_url', 'option');?>">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="<?php echo get_field('linkedin_url', 'option');?>">
						<i class="fa fa-linkedin"></i>
					</a>
					<a href="<?php echo get_field('pinterest_url', 'option');?>">
						<i class="fa fa-pinterest-p"></i>
					</a>
				</div>
				<p>Live in the grey © 2016   &nbsp;&nbsp; | &nbsp;&nbsp;   <a href="">design by 214</a></p>
			</div>
		</div>
	</footer>


	<?php 

		if (is_page('home')) { ?>
			<script type="text/javascript">

				jQuery( document ).ready(function( $ ) {

					$(".slider_owv").slick({
						dots: true,
						infinite: true,
						autoplay: true,
		  				autoplaySpeed: 2000,
						slidesToShow: 1,
						slidesToScroll: 1
					});
		      	});

			</script>
		<?php } ?>


<?php wp_footer(); ?>

</body>
</html>
