
 
 <section class="next-project-block">

    <?php while( have_rows('next_project_block') ): the_row(); ?>
 
    	<div class="project-block-wrapper">

	 		<h2 class="next-project">|Next Project|</h2>
			<h1 class="service-title"> <?php echo get_sub_field('project_title') ;?> 
	 		</h1>


			<?php while( have_rows('project_tags_list') ): the_row(); ?>
				<a href="<?php echo get_sub_field('project_tag_link') ;?>">
					<p><?php echo get_sub_field('project_tag') ;?></p>
				</a>
    		<?php endwhile; ?>


			<?php 
			if(get_sub_field('learn_more_text')) {
				echo '<a class="learn-more-text href="'  . get_sub_field('learn_more_link') .  '"><div>See Project<i class="fa fa-long-arrow-right" aria-hidden="true"></i></div></a>';
				} ?> 

		</div>
        
    <?php endwhile; ?>
 
 </section>
 


