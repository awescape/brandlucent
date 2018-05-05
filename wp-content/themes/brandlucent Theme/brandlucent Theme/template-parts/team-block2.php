
<section class="team-block"  style="background-image: url('<?php echo get_field('left_block_image') ;?>');">


<?php if( get_field('right_block_title') ): ?>
			<a class="team-block-2" href="<?php echo get_field('right_block_text_link') ;?>">
			<!-- 	<div class=""> -->
					<video class="video-background" autoplay loop id="video-background" muted plays-inline>
					<source src="<?php echo get_field('right_block_video') ;?>" type="video/mp4">
					</video>

					<div class="floating-text">
						<h4 class="hideme">
							<?php echo get_field('right_block_title') ;?> 
						</h4>
							<p class="hideme">
							<?php echo get_field('right_block_text') ;?>
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</p>
					
					</div>
					<div id="" class="team-member-cover"></div>
				<!-- </div> -->
			</a>
<?php endif; ?>




    <?php while( have_rows('team_member_block') ): the_row(); ?>
 
    	<div class="project-block-wrapper">

	
			
		</div> 

    <?php endwhile; ?>

 
 </section>
 


