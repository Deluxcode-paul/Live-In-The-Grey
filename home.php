<?php
/**
 * Template Name: Home
 *
 */

get_header(); ?>


<section class="big-banner">
		<div class="text-center">
			<p><?php echo get_field('text_sec_1');?></p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hash-tag"><?php echo get_field('link_text');?></a>
		</div>
	</section>

	<section class="video-block">
		<div class="row">
			<div class="large-6 medium-6 column">
				<?php echo get_field('video');?>
			</div>
			<div class="large-6 medium-6 column">
				<h2><?php echo get_field('title_video');?></h2>
				<p><?php echo get_field('text_video');?></p>
				<a href="<?php echo get_field('button_url_video');?>" class="video-button"><?php echo get_field('button_txt_video');?></a>
			</div>
		</div>
	</section>

	<section class="three-blocks">
		<div class="container">
			<div class="row">
				<div class="large-12 column text-center">
					<h2><?php echo get_field('title_sec_3');?></h2>
					<p><?php echo get_field('sub_title_sec_3');?></p>
				</div>
			</div>
			<div class="blocks-container" id="animated-blocks">

			<?php if( have_rows('3_blocks') ):
			    while ( have_rows('3_blocks') ) : the_row(); ?>

				<div class="row">
					<div class="large-4 medium-4 column">
						<div id="first-animation">
							<div class="one-block orange">
								<p><?php echo get_sub_field('text_bg');?></p>
							</div>
							<h5><?php echo get_sub_field('title_block');?></h5>
							<p><?php echo get_sub_field('text_block');?></p>
						</div>
					</div>
					<div class="large-4 medium-4 column">
						<div id="second-animation">
							<div class="one-block green">
								<p><?php echo get_sub_field('text_bg_2');?></p>
							</div>
							<h5><?php echo get_sub_field('title_block_2');?></h5>
							<p><?php echo get_sub_field('text_block_2');?></p>
							<span><?php echo get_sub_field('text_block_2_2');?></span>
						</div>
					</div>
					<div class="large-4 medium-4 column">
						<div id="third-animation">
							<div class="one-block yellow">
								<p><?php echo get_sub_field('text_bg_3');?></p>
							</div>
							<h5><?php echo get_sub_field('title_block_3');?></h5>
							<p><?php echo get_sub_field('text_block');?></p>
						</div>
					</div>
				</div>

			<?php endwhile;

			endif; ?>

			</div>
		</div>
	</section>
	
	<section class="photo-text">
		<div class="container slider_owv">


			<?php if( have_rows('slider_list') ):
			    while ( have_rows('slider_list') ) : the_row(); ?>

				<div class="row">
					<div class="large-4 medium-4 column">
						<div class="photo">
							<img src="<?php echo get_sub_field('image_slider');?>" alt="">
						</div>
					</div>
					<div class="large-8 medium-8 column">					
						<div class="text">
							<h4><?php echo get_sub_field('title_slider');?></h4>
							<p><?php echo get_sub_field('text_slider');?></p>
							<span>-  <?php echo get_sub_field('author');?></span>
						</div>
					</div>
				</div>

			<?php endwhile;

			endif; ?>

		</div>
	</section>


	<section class="our-partners">
		<div class="container">
			<div class="row">
				<div class="large-12 column text-center">
					<h2><?php echo get_field('title_partners');?></h2>
				</div>
			</div>
			<div class="row">
				<div class="large-12">

					<?php if( have_rows('list_images') ):
			    		while ( have_rows('list_images') ) : the_row(); ?>


						<div class="one-ico" style="">
							<img src="<?php echo get_sub_field('img_partner');?>" alt="">
						</div>


					<?php endwhile;

					endif; ?>

				</div>
			</div>
		</div>
	</section>

	<section class="form-block">
		<div class="row">
			<div class="large-12 column text-center">
				<h2><?php echo get_field('title_form');?></h2>
				<p><?php echo get_field('text_form');?></p>
			</div>
		</div>

		<?php echo do_shortcode('[contact-form-7 id="88" title="Home form"]'); ?>
		
	</section>


<?php get_footer(); ?>