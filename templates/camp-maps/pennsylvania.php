<?php
/**
 * Template part for Camp Map - Pennsylvania Camps
 **/
?>

<?php if( have_rows('pa_details') ):?>

	<div class="map-camp <?php  the_field('pa_season');?>-camp pa-camp clearfix">

		<a class="tooltip-link" data-toggle="pa-tip"><i class="map-pin"></i><?php the_field('pa_label');?></a>

		<div class="dropdown-pane" id="pa-tip" data-dropdown data-hover="true" data-hover-pane="true">


		 	<?php while ( have_rows('pa_details') ) : the_row();?>

		 		<a class="camp-link" href="<?php the_sub_field('camp_url');?>">
			        
			        <strong><?php the_sub_field('camp_title');?></strong>
			        <strong><?php the_sub_field('camp_date');?></strong>

		        </a>

			<?php endwhile;?>

		</div>
	</div>
	
<?php endif;?>