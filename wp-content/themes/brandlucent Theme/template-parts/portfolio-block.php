<section class="portfolio-block">

	<div class="page-name page-name-potfolio"><?php echo get_field('page_title') ;?></div>

	<?php $f = 1; ?>

    <?php while( have_rows('portfolio_items') ): the_row(); ?>


		<div class="panel" data-color="<?php echo get_sub_field('project_color') ;?>">

			<div class="work-blurb">

			  	<h3 class="work-blurb-title">
			  		<?php echo get_sub_field('project_title') ;?>
			  	</h3>
			  	<div class="banner-line"></div>

			  	<p class="work-blurb-content">
			  		<?php echo get_sub_field('project_blurb') ;?><br><br>

			  		<?php echo get_sub_field('tag_title') ;?><br><br>

			  		<?php while( have_rows('project_tags') ): the_row(); ?>
					  	<div class="project-tags"><a  href="<?php echo get_sub_field('project_tag_link') ;?>">
					  			<p><?php echo get_sub_field('project_tag') ;?></p>
					  	</a></div>
			  		<?php endwhile; ?>

			<br><a class="learn-more-text" href="<?php echo get_sub_field('project_page_link') ;?>">
			  		<div>
			  			<?php echo get_sub_field('project_page') ;?><i class="fa fa-long-arrow-right"></i>
			  		</div>
				</a>
			  	</p>

			

			</div>

		  <div class="work-images">
		  	<img class="project-image-solo" src="<?php echo get_sub_field('project_image_solo') ;?>">
		  	<img class="project-image-laptop" src="<?php echo get_sub_field('project_image_laptop') ;?>">
		  	<img id="prlx_lyr_mobile<?php echo $f; ?>" class="project-image-mobile" src="<?php echo get_sub_field('project_image_mobile') ;?>">
		  </div> 

		
		</div>

		<div class="portfolio-break"></div>  

		<?php $f++; ?>
    <?php endwhile; ?>



</section>
