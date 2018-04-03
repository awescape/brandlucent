<section class="portfolio-block">

	<div class="page-name page-name-portfolio"><?php echo get_field('page_title') ;?></div>

	<?php $f = 1; ?>

    <?php while( have_rows('portfolio_items') ): the_row(); ?>

    	
		<div class="panel panel-<?php echo $f; ?>" data-color="<?php echo get_sub_field('project_color') ;?>">

			<div class="work-blurb">

			  	<h3 class="work-blurb-title <?php if ($f > 1)echo "hideme";?> ">
			  		<?php echo get_sub_field('project_title') ;?>
			  	</h3>

			  	<div class="banner-line <?php if ($f > 1)echo "hideme";?>">
				</div>

			  	<p class="work-blurb-content <?php if ($f > 1)echo "hideme";?>">
			  		<?php echo get_sub_field('project_blurb') ;?><br><br>

			  		<?php echo get_sub_field('tag_title') ;?><br>

			  		<?php while( have_rows('project_tags') ): the_row(); ?>
					  	<div class="project-tags <?php if ($f > 1)echo "hideme";?>">
					  		<a  href="<?php echo get_sub_field('project_tag_link') ;?>">
					  			<p><?php echo get_sub_field('project_tag') ;?></p>
					  		</a>
					  	</div>
			  		<?php endwhile; ?>

					<br>
					<a class="learn-more-text <?php if ($f > 1)echo "hideme";?>" href="<?php echo get_sub_field('project_page_link') ;?>">
			  			<div><?php echo get_sub_field('project_page') ;?><i class="fa fa-long-arrow-right"></i>
			  			</div>
					</a>
			  	</p>

		
			</div>
			<a class="work-images" href="<?php echo get_sub_field('project_page_link') ;?>">



				<?php 
				$image = get_sub_field('project_image_solo');
				if( !empty($image) ): ?>
					<img id="prlx_lyr_solo<?php echo $f; ?>" 
						class="project-image-solo project-image-solo-<?php echo $f; ?>" 
						src="<?php echo $image['url']; ?>" 
						alt="<?php echo $image['alt']; ?>" 
						description="<?php echo $image['description']; ?>"
					/>
				<?php endif; 
				?>



				<?php 
				$image = get_sub_field('project_image_laptop');
				if( !empty($image) ): ?>
					<img id="prlx_lyr_laptop<?php echo $f; ?>" 
						class="project-image-laptop project-image-laptop-<?php echo $f; ?>" 
						src="<?php echo $image['url']; ?>" 
						alt="<?php echo $image['alt']; ?>" 
						description="<?php echo $image['description']; ?>"
					/>
				<?php endif; 
				?>


				<?php 
				$image = get_sub_field('project_image_mobile');
				if( !empty($image) ): ?>
					<img id="prlx_lyr_mobile<?php echo $f; ?>" 
						class="hideme project-image-mobile project-image-mobile-<?php echo $f; ?>" 
						src="<?php echo $image['url']; ?>" 
						alt="<?php echo $image['alt']; ?>" 
						description="<?php echo $image['description']; ?>"
					/>
				<?php endif; 
				?>

			</a> 

		
		</div>

		<div class="portfolio-break"></div>  

		<?php $f++; ?>
    <?php endwhile; ?>



</section>
