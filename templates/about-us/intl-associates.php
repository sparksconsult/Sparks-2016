<?php
/**
 * Template part for About Us - International Associates
 **/
?>

<div class="tabs-panel" id="panel5">
	<h2>International Associates</h2>

		<?php if( have_rows('international_associates') ): ?>

		    <?php while( have_rows('international_associates') ): the_row(); ?>
		        
		        <?php 
		        
			        $intlAssocName = get_sub_field('international_associates_name'); 
			        $intlAssocLocation = get_sub_field('international_associates_location');
			        $intlAssocBio = get_sub_field('international_associates_bio'); 
			        $intlAssocImg = get_sub_field('international_associates_photo'); 
		        
		        ?>
		        <hr>
		        <div class="about-intl-assoc">
			    	<h5>
			    		<?php 
			    			echo $intlAssocName; 
			    			if (!empty($intlAssocLocation) )
			    				echo $intlAssocLocation;
			    		?>
			    	</h5>
			    	<?php echo $intlAssocBio;?>
			    	 <?php if( !empty($intlAssocImg) ): ?>

						<img src="<?php echo $intlAssocImg['url']; ?>" alt="<?php echo $intlAssocImg['alt']; ?>" />

					<?php endif; ?>

		        </div>
		        
		    <?php endwhile; ?>

	<?php endif; ?>
</div>