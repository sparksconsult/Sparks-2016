<?php
/**
 * Template part for About Us - Coxing Associates
 **/
?>

<div class="tabs-panel" id="panel4">
	<h2>Coxing Associates</h2>
		<?php if( have_rows('coxing_associates') ): ?>

		    <?php while( have_rows('coxing_associates') ): the_row(); ?>
		        
		        <?php 
		        
			        $coxingAssocName = get_sub_field('coxing_associates_name'); 
			        $coxingAssocLocation = get_sub_field('coxing_associates_ocation');
			        $coxingAssocBio = get_sub_field('coxing_associates_bio'); 
			        $coxingAssocImg = get_sub_field('coxing_associates_photo'); 
		        
		        ?>
		        <hr>
		        <div class="about-coxingAssocs">
			    	<h5>
			    		<?php 
			    			echo $coxingAssocName; 
			    			if (!empty($coxingAssocLocation) )
			    				echo $coxingAssocLocation;
			    		?>
			    	</h5>
			    	<?php echo $coxingAssocBio;?>
			    	 <?php if( !empty($coxingAssocImg) ): ?>

						<img src="<?php echo $coxingAssocImg['url']; ?>" alt="<?php echo $coxingAssocImg['alt']; ?>" />

					<?php endif; ?>

		        </div>
		        
		    <?php endwhile; ?>

		<?php endif; ?>
</div>