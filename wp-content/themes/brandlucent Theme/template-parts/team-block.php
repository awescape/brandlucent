




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

			<!-- Member 1 video -->
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
				<div id="member-1" class="opacity"></div>
			</div>

			<!-- Member 1 POPUP -->
			<div id="team-popup-1" class="team-popup">
				<div class="popup-left">	
					<h4>
						<?php echo get_field('team_member_1_name') ;?> 
					</h4>
					<h5 class="popup-subtite">
						<?php echo get_field('team_member_1_title') ;?>
						</h5>
					<p> <?php echo get_field('team_member_1_blurb') ;?></p>

					<a class="popup-link" href="<?php echo get_field('team_member_1_profile') ;?>">
						<p>
							<?php echo get_field('call_to_action_text') ;?>
							<i class="<?php echo get_field('cta_arrow') ;?>" aria-hidden="true"></i>
						</p>
					</a>

					<a href="<?php echo get_field('popup_button_link') ;?>">
						<button class="button popup-button">Let's talk
						</button>
					</a>
				</div>


				<div class="popup-right">
					<p id="close-1">X</p>
					<img src="https://mir-s3-cdn-cf.behance.net/projects/202/17534663.548c98a38216d.jpg">
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