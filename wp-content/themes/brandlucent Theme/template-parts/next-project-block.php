
 <section class="next-project-block">

    <?php while( have_rows('next_project_block') ): the_row(); ?>
 
    	<div class="project-block-wrapper">


	 		<h2 class="next-project hideme">|Next Project|</h2>

			<a href="<?php echo get_sub_field('learn_more_link') ;?>">
				<h1 class="service-title hideme"> <?php echo get_sub_field('project_title') ;?> 
	 			</h1>
	 		</a>

			<div class="project-tag hideme">
				<?php while( have_rows('project_tags_list') ): the_row(); ?>
					<a href="<?php echo get_sub_field('project_tag_link') ;?>">
						<p><?php echo get_sub_field('project_tag') ;?></p>
					</a>
    			<?php endwhile; ?>
			</div>

	    	<a class="learn-more-text hideme" href="<?php echo get_sub_field('learn_more_link') ;?>">
					<div>See Project</div><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
			
		</div> 
    <?php endwhile; ?>

	<?php if( get_field('next_project_image') ): ?>
 		<img class="next-project-image" src="<?php echo get_field('next_project_image')?>">
	<?php endif; ?>
 
 </section>
 


