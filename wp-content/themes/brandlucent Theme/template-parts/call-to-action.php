

<?php if(get_field('call_to_action_text')) {?>
<section class="call-to-action <?php echo get_field('cta_color') ;?>">
	
	<a href="<?php echo get_field('call_to_action_link') ;?>">
		<h1>
			<?php echo get_field('call_to_action_text') ;?>
			<i class="<?php echo get_field('cta_arrow') ;?>" aria-hidden="true"></i>
		</h1>
	</a>

	<?php if(get_field('cta_button')) {?>
		<a href="<?php echo get_field('call_to_action_link') ;?>">
			<button class="button cta-button">
				<?php echo get_field('cta_button') ;?>
				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</button>
		</a>
	<?php }?>

</section>

<?php }?>


