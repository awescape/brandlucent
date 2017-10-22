
 
 <form id="project-inquiry" class="project-inquiry">

	<p class="logo logo-form">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php if ( is_front_page() && is_home() ) : ?>
					<img class="menu-activated" src="wp-content/uploads/2017/07/FinalLogoIconOnly.png">
			</a>
				<?php else : ?>
					<img class="menu-activated" src="../wp-content/uploads/2017/07/FinalLogoIconOnly.png">
			</a>
				<?php endif; ?>
		</p>

	<p class="form-close">inquiry <span id="form-close" class="xclose">X</span></p>

	<div class="form-grid"></div>

	<div class="form-page-1">
		<h1>Bold branding.</h1>

		<p class="form-text">Thank you for your interest in working with us. Please complete the form below and we'll be in touch as soon as possible.</p>

		<div class="form-input-wrapper">
			<p class="form-title">Your name</p>
			<input id="name" type="text" placeholder="Your name here">
		</div>

		<div class="form-input-wrapper">
			<p class="form-title">Your company/organization</p>
			<input id="company" type="text" placeholder="Company name here">
		</div>

		<div class="form-input-wrapper">
			<p class="form-title">Your contact info</p>
			<div class="contact-info">
				<input id="phone" type="text" placeholder="Phone number">
				<input id="email" type="text" placeholder="Email Address">		
			</div>
		</div>

		<button id="form-button" class="button form-button">Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>


	</div>

 
			<!-- page 2 -->

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
	
 

