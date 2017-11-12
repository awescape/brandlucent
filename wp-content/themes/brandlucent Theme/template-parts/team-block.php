




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




<?php if( get_field('team_member_1_name') ): ?>

			<!-- Member 1 video -->
			<div id="member-1" class="team-block-3">

				<div >
					<img class="mobile-1-unclicked team-mobile-pic" id="mobile-1-pic" src="<?php echo get_field('team_member_1_photo') ;?>">

					<img id="mobile-1-clicked" class="team-mobile-clicked" src="<?php echo get_field('team_member_1_photo') ;?>">
				</div>

				<video class="video-background" autoplay loop id="video-background" muted plays-inline>
				<source src="<?php echo get_field('team_member_1_video') ;?>" type="video/mp4">
				</video>

				<div class="floating-text">
					<h4 class="hideme">
						<?php echo get_field('team_member_1_name') ;?> 
					</h4>
					<h5 class="hideme">
						<?php echo get_field('team_member_1_title') ;?> 
					</h5>


				</div>
				<div class="team-member-cover"></div>

			</div>



			<!-- Member 1 POPUP -->
			<div id="team-popup-1" class="team-popup">

			<div class="team-popup-wrapper">
				<div class="popup-left">	
					<h4>
						<?php echo get_field('team_member_1_name') ;?> 
					</h4>
					<h5 class="popup-subtite">
						<?php echo get_field('team_member_1_title') ;?>
						</h5>
					<p> <?php echo get_field('team_member_1_blurb') ;?></p>

					<a class="popup-link popup-link-1" href="<?php echo get_field('team_member_1_profile') ;?>">
						<p>
							Connect on LinkedIn 
							<i class="<?php echo get_field('cta_arrow') ;?>" aria-hidden="true"></i>
						</p>
					</a>

					<a href="<?php echo get_field('lets_talk_link') ;?>">
						<button class="button popup-button">Let's talk
						</button>
					</a>
				</div>

				<div class="popup-right" style="background-image: url('<?php echo get_field('team_member_1_photo') ;?>');">
					<p id="close-1" class="xclose">X</p>
					<img src="<?php echo get_field('team_member_1_photo') ;?>">
				</div>
			</div>
			</div>
<!-- 			<div class="down-wrapper"><i id="down-arrow-1" class="down-arrow hideme fa fa-angle-down" aria-hidden="true"></i></div> -->

<?php endif; ?>


<?php if( get_field('team_member_2_name') ): ?>

			<!-- Member 2 video -->
			<div id="member-2" class="team-block-3">

				<div >
					<img class="mobile-2-unclicked team-mobile-pic" id="mobile-2-pic" src="<?php echo get_field('team_member_2_photo') ;?>">

					<img id="mobile-2-clicked" class="team-mobile-clicked" src="<?php echo get_field('team_member_2_photo') ;?>">
				</div>

				<video class="video-background" autoplay loop id="video-background" muted plays-inline>
				<source src="<?php echo get_field('team_member_2_video') ;?>" type="video/mp4">
				</video>

				<div class="floating-text">
					<h4 class="hideme">
						<?php echo get_field('team_member_2_name') ;?> 
					</h4>
					<h5 class="hideme">
						<?php echo get_field('team_member_2_title') ;?> 
					</h5>
				</div>
				<div class="team-member-cover"></div>

			</div>

			<!-- Member 2 POPUP -->
			<div id="team-popup-2" class="team-popup">

			<div class="team-popup-wrapper">
				<div class="popup-left">	
					<h4>
						<?php echo get_field('team_member_2_name') ;?> 
					</h4>
					<h5 class="popup-subtite">
						<?php echo get_field('team_member_2_title') ;?>
						</h5>
					<p> <?php echo get_field('team_member_2_blurb') ;?></p>

					<a class="popup-link popup-link-2" href="<?php echo get_field('team_member_2_profile') ;?>">
						<p>
							Connect on LinkedIn 
							<i class="<?php echo get_field('cta_arrow') ;?>" aria-hidden="true"></i>
						</p>
					</a>

					<a href="<?php echo get_field('lets_talk_link') ;?>">
						<button class="button popup-button">Let's talk
						</button>
					</a>
				</div>

				<div class="popup-right" style="background-image: url('<?php echo get_field('team_member_2_photo') ;?>');">
					<p id="close-2" class="xclose">X</p>
					<img src="<?php echo get_field('team_member_2_photo') ;?>">
				</div>
			</div>
			</div>

<?php endif; ?>

<?php if( get_field('team_member_3_name') ): ?>

			<!-- Member 3 video -->
			<div id="member-3" class="team-block-3">

				<div >
					<img class="mobile-3-unclicked team-mobile-pic" id="mobile-3-pic" src="<?php echo get_field('team_member_3_photo') ;?>">

					<img id="mobile-3-clicked" class="team-mobile-clicked" src="<?php echo get_field('team_member_3_photo') ;?>">
				</div>

				<video class="video-background" autoplay loop id="video-background" muted plays-inline>
				<source src="<?php echo get_field('team_member_3_video') ;?>" type="video/mp4">
				</video>

				<div class="floating-text">
					<h4 class="hideme">
						<?php echo get_field('team_member_3_name') ;?> 
					</h4>
					<h5 class="hideme">
						<?php echo get_field('team_member_3_title') ;?> 
					</h5>
				</div>
				<div class="team-member-cover"></div>

			</div>

			<!-- Member 3 POPUP -->
			<div id="team-popup-3" class="team-popup">

			<div class="team-popup-wrapper">
				<div class="popup-left">	
					<h4>
						<?php echo get_field('team_member_3_name') ;?> 
					</h4>
					<h5 class="popup-subtite">
						<?php echo get_field('team_member_3_title') ;?>
						</h5>
					<p> <?php echo get_field('team_member_3_blurb') ;?></p>

					<a class="popup-link popup-link-3" href="<?php echo get_field('team_member_3_profile') ;?>">
						<p>
							Connect on LinkedIn 
							<i class="<?php echo get_field('cta_arrow') ;?>" aria-hidden="true"></i>
						</p>
					</a>

					<a href="<?php echo get_field('lets_talk_link') ;?>">
						<button class="button popup-button">Let's talk
						</button>
					</a>
				</div>

				<div class="popup-right" style="background-image: url('<?php echo get_field('team_member_3_photo') ;?>');">
					<p id="close-3" class="xclose">X</p>
					<img src="<?php echo get_field('team_member_3_photo') ;?>">
				</div>
			</div>
			</div>

<?php endif; ?>


</section>