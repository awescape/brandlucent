<section class="portfolio-block">

	<div class="page-name"><?php echo get_field('page_title') ;?></div>

    <?php while( have_rows('portfolio_items') ): the_row(); ?>


		<div class="panel" data-color="<?php echo get_sub_field('project_color') ;?>">

			<div class="work-blurb">

			  	<h3 class="work-blurb-title">
			  		<?php echo get_sub_field('project_title') ;?>	
			  	</h3>

			  	<p class="work-blurb-content">
			  		<?php echo get_sub_field('project_blurb') ;?>
			  	</p>

			  	<p class="tag-title">
			  		<?php echo get_sub_field('tag_title') ;?>
			  	</p>

			  	<div class="project-tags">
			  		<?php while( have_rows('project_tags') ): the_row(); ?>
					  	<a href="<?php echo get_sub_field('project_tag_link') ;?>">
					  		<p class="project-tag">
					  			<?php echo get_sub_field('project_tag') ;?>
					  		</p>
					  	</a>
			  		<?php endwhile; ?>
			  	</div>	

				<a class="project-page-link" href="<?php echo get_sub_field('project_page_link') ;?>">
			  		<p class="project-page">
			  			<?php echo get_sub_field('pproject_page') ;?>
			  		</p>
				</a>
			</div>

		  <div class="work-images">
		  	<img src="<?php echo get_sub_field('project_image_solo') ;?>">
		  </div> 
		</div>

		<div class="portfolio-break"></div>  

    <?php endwhile; ?>
 
</section>
 

<!-- 		<div class="panel" data-color="white">
		  <div class="work-blurb">
		  	<h3 class="work-blurb-title">RIBA</h3>
		  	<p class="work-blurb-content">In the complex fast paced workld of retail data integration, how do you make your brand personal and accessible? RIBA turned to Brandlucent to make their brand align with their vision</p>
		  	<p>
		  	What we did: 
		  	<br>Brand Strategy
		  	<br>Brand Identity
		  	<br>Brand Identity
		  	<br>Brand Identity
		  	</p>
		  	<p>View Project</p>
		  </div>
		  <div class="work-images">
		  	<img src="http://localhost:8080/brandlucent/wp-content/uploads/2017/06/services-pinksquare.jpg">
		  </div>

		  	</div> -->


	