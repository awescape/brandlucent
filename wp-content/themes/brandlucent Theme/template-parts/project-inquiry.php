
 <section class="pi-section">


 <form id="project-inquiry" class="project-inquiry">

	<div class="form-header">

		<p class="logo logo-form">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php if ( is_front_page() && is_home() ) : ?>
					<img class="menu-activated" src="wp-content/uploads/2017/10/Brandlucent-Logo-White.png">

			</a>
				<?php else : ?>
					<img class="menu-activated" src="../wp-content/uploads/2017/10/Brandlucent-Logo-White.png">
			</a>
				<?php endif; ?>
		</p>

	<h2 id="form-close-1" class="form-close ">inquiry 
		<span id="form-close" class="xclose">
			<a href="<?php echo get_field('close_link') ;?>">X
			</a>
		</span>
	</h2>
	
	<h2 id="back-button-1" class="form-close hidden">back 
	</h2>
		
	</div>

	<div class="form-grid"></div>

	<div id="form-page-1" class="form-page form-page-1">
		<h1>Bold branding.</h1>

		<p class="form-text">Thank you for your interest in working with us. Please complete the form below and we'll be in touch as soon as possible.</p>

		<div class="form-input-wrapper">
			<p class="form-title">Your name*</p>
			<input id="name" type="text" placeholder="Your name here*">
		</div>

		<div class="form-input-wrapper">
			<p class="form-title">Your company/organization</p>
			<input id="company" type="text" placeholder="Company name here">
		</div>

		<div class="form-input-wrapper">
			<p class="form-title">Your contact info*</p>
			<div class="contact-info">
				<input id="phone" type="text" placeholder="Phone number">
				<input id="email" type="text" placeholder="Email Address*">		
			</div>
		</div>

		<div id="form-button-1" class="button form-button">Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>

	</div>

 
			<!-- page 2 -->

	<div id="form-page-2" class="form-page form-page-2">

		<h1>What can we help you with?</h1>

		<p class="form-text">What services are you interested in?<br>Please select all that apply.</p>

		<div class="form-input-wrapper">


				<div class="checkbox-wrapper">
					<div class="checkbox">
						<label>
							<input id="checkBox1" type="checkbox">
							<i class="fa fa-check" aria-hidden="true"></i>
						</label>
						<p class="form-title">Brand Strategy</p>
					</div>
					<div class="checkbox">
						<label>
							<input id="checkBox2" type="checkbox">
							<i class="fa fa-check" aria-hidden="true"></i>
						</label>
						<p class="form-title">Brand-first Website Design</p>
					</div>
					<div class="checkbox">
						<label>
							<input id="checkBox3" type="checkbox">
							<i class="fa fa-check" aria-hidden="true"></i>
						</label>
						<p class="form-title">Brand Identity</p>
					</div>
					<div id="ck-button" class="checkbox">
						<label>
							<input id="checkBox4" type="checkbox">
							<i class="fa fa-check" aria-hidden="true"></i>
						</label>
						<p class="form-title">Packaging</p>
					</div>
				</div>

				<textarea class="form-message" id="message1" type="text" placeholder="Please tell us about your branding needs and your budget..."></textarea>

<!-- 				<textarea class="form-message" id="message2" type="text" placeholder="How did your hear about us?"></textarea> -->

				<select class="form-message" placeholder="How did you hear about us?">
					  <option value="How did you hear about us?">How did you hear about us?</option>
					  <option value="Friend or colleague">Friend or colleague</option>
					  <option value="Internet search">Internet search</option>
					  <option value="LinkedIn">LinkedIn</option>
					  <option value="Event">Event</option>
					  <option value="Other">Other</option>
				</select>


				<button id="form-button-2" class=" button form-button"><input id="submit" type="submit" value="Submit"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>


		</div>

	</div>

<!-- 			<div>

				<h1>What can we help you with?</h1>

				<p>What services are you interested in?<br>Please select all that apply.</p>4


				<div>
					<input id="checkBox1" type="checkbox">
					<p>Brand Strategy</p>
				</div>
				<div>
					<input id="checkBox2" type="checkbox">
					<p>Brand Strategy</p>
				</div>
				<div>
					<input id="checkBox3" type="checkbox">
					<p>Brand Strategy</p>
				</div>
				<div>
					<input id="checkBox4" type="checkbox">
					<p>Brand Strategy</p>
				</div>

				<div>
					<input id="checkBox1" type="checkbox">
					<p>Brand Strategy</p>
				</div>
			</div>

			<textarea id="message" type="text" placeholder="MESSAGE"></textarea>

			<input id="submit" type="submit" value="GO!">

			 -->

</form>

</section>	
 

