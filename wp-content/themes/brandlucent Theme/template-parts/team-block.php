




<section class="team-block"  style="background-image: url('<?php echo get_field('left_block_image') ;?>');">
			



<?php if( get_field('right_block_title') ): ?>
			<div class="team-block-2">
				<video class="video-background" autoplay loop id="video-background" muted plays-inline>
				<source src="<?php echo get_field('right_block_video') ;?>" type="video/mp4">
				</video>

				<div class="floating-text">
					<h4>
						<?php echo get_field('right_block_title') ;?> 
					</h4>
					<a href="<?php echo get_field('right_block_text') ;?>">
						<p>
						<?php echo get_field('right_block_text') ;?>
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</p>
					</a>
				</div>
			</div>
<?php endif; ?>




<?php if( get_field('team_member_1_name') ): ?>
			<div class="team-block-3">
				<video class="video-background video-background-karen" autoplay loop id="video-background" muted plays-inline>
				<source src="<?php echo get_field('team_member_1_video') ;?>" type="video/mp4">
				</video>

				<div class="floating-text">
					<h4>
						<?php echo get_field('team_member_1_name') ;?> 
					</h4>
					<h4>
						<?php echo get_field('team_member_1_title') ;?> 
					</h4>

				</div>
			</div>
<?php endif; ?>



<?php if( get_field('team_member_2_name') ): ?>
			<div class="team-block-3">
				<video class="video-background" autoplay loop id="video-background" muted plays-inline>
				<source src="<?php echo get_field('team_member_2_video') ;?>" type="video/mp4">
				</video>

				<div class="floating-text">
					<h4>
						<?php echo get_field('team_member_2_name') ;?> 
					</h4>
					<h4>
						<?php echo get_field('team_member_2_title') ;?> 
					</h4>

				</div>
			</div>
<?php endif; ?>

<?php if( get_field('team_member_3_name') ): ?>
			<div class="team-block-3">
				<video class="video-background" autoplay loop id="video-background" muted plays-inline>
				<source src="<?php echo get_field('team_member_3_video') ;?>" type="video/mp4">
				</video>

				<div class="floating-text">
					<h4>
						<?php echo get_field('team_member_3_name') ;?> 
					</h4>
					<h4>
						<?php echo get_field('team_member_3_title') ;?> 
					</h4>

				</div>
			</div>
<?php endif; ?>



			</section>