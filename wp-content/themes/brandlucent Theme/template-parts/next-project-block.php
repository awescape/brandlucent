
 <section class="next-project-block">

    <?php while( have_rows('next_project_block') ): the_row(); ?>

 
    	<div class="project-block-wrapper">

    		<div class="next-project">
		 		<h2 class="next-project-title hideme">| Next Project |</h2>

				<a href="<?php echo get_sub_field('project_page_link') ;?>">
					<h1 class="service-title hideme"> <?php echo get_sub_field('project_title') ;?> 
		 			</h1>
		 		</a>

				<div class="project-tag hideme">
					<p>
					<?php while( have_rows('project_tags_list') ): the_row(); ?>
						<a href="<?php echo get_sub_field('project_tag_link') ;?>">
							<span><?php echo get_sub_field('project_tag') ;?></span>
						</a>

	    			<?php endwhile; ?>
	    			</p>
				</div>

		    	<a class="learn-more-text hideme" href="<?php echo get_sub_field('project_page_link') ;?>">
						<div>See Project</div><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div> 


	<?php if( get_field('next_project_image') ): ?>
		<a href="<?php echo get_sub_field('project_page_link') ;?>" class="next-project-image-container">
 		<div  class="next-project-image" style="background-image: url('<?php echo get_field('next_project_image')?>');">
		</div>
		</a>
	<?php endif; ?>
	
    <?php endwhile; ?> 
 </section>
 


