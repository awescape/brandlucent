<?php if( have_rows('service_line_block') ): ?>
 
 <section class="service-line-intro">

    <?php while( have_rows('service_line_block') ): the_row(); ?>
 
    <div class="service-line-block">
    	<div class="service-line-wrapper">
	 		<h2 class="service-title-area"> <?php echo get_sub_field('service_title_area') ;?> 
	 		</h2>
	 		<h1 class="service-title"> <?php echo get_sub_field('service_title') ;?> 
	 		</h1>
	 		<p class="service-description"> <?php echo get_sub_field('service_description') ;?> 
	 		</p>


			<?php echo '<a class="learn-more-text href="'  . get_sub_field('learn_more_link') .  '"><div ">' . get_sub_field('learn_more_text') . '<i class="fa fa-long-arrow-right" aria-hidden="true"></i></div></a>'; ?> 

		</div>
    </div>
        
    <?php endwhile; ?>
 
 </section>
 
<?php endif; ?>