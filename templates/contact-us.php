<?php
/*
Template Name: Contact Us
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<div class="full-bg">
		<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('full', array('class' => 'full-bg-img'));
		} ?>
	</div>
	<div class="page-wrap">

		<div class="row">
			<div class="nano has-scrollbar tabs-content large-8 large-centered columns" data-tabs-content="about-us">
		        <div class="nano-content">
		        	<h2><?php the_title();?></h2>

		        	<?php

						if( have_rows('contact_content_block') ):

						    while ( have_rows('contact_content_block') ) : the_row();

						        $img = get_sub_field('contact_icon');?>

						        <hr>

						        <img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt']?>">

						        <h6><?php the_sub_field('contact_heading');?></h6>

						        <p><?php the_sub_field('contact_block_content');?></p>


						    <?php endwhile;

						else :

						    // no rows found

						endif;

					?>

					<div class="contact-goals">
						<?php the_field('contact_content');?>
					</div>

		        </div>
	        </div>
	    </div>

	</div>
  
  <?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>


<?php get_footer(); ?>
