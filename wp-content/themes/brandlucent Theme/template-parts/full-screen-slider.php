



<section class="full-screen-slider">

  <h3 class="hideme"><?php echo get_field('full_screen_slider_title');?></h3>

  <div id="slide-window" class="hideme">

  
   <?php $b = 0; ?>

    <ol id="slides" start="1">
    
<!--       <li class="slide color-0 alive">slide 1</li>
      
      <li class="slide color-1">slide 2</li>
      
      <li class="slide color-2">slide 3</li>
      
      <li class="slide color-3">slide 4</li>
      
      <li class="slide color-4">slide 5</li> -->


    	<?php while( have_rows('slides') ): the_row(); ?>

      	<li class="slide color-<?php echo $b; ?> alive<?php echo $b; ?>">

            <?php 
              $image = get_sub_field('slide_image');
              if( !empty($image) ): ?>
                <img 
                  src="<?php echo $image['url']; ?>" 
                  alt="<?php echo $image['alt']; ?>" 
                  description="<?php echo $image['description']; ?>"
                />
              <?php endif; 
            ?>

      	</li>
    	<?php endwhile; ?>
    
    </ol>
 
    <span class="slide-nav fa fa-angle-left" id="left"></span>
    <span class="slide-nav fa fa-angle-right" id="right"></span>
    

    
</div>
 
</section>

<!-- Testing slider resize -->
<!-- <section>
<p>Window resized <span>0</span> times.</p>
<p>Try resizing your browser window.</p>
</section> -->

