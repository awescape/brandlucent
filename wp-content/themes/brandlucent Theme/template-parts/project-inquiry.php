
 
 <form class="project-inquiry">

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

	<p id="form-close">inquiry <span>X</span></p>

	<div class="form-page-1">
		<h1>Bold Branding</h1>

		<p>Thank you for your interest in working with us. Please complete the form below and we'll be in touch as soon as possible.</p>


		<p>Your name</p>
		<input id="name" type="text" placeholder="Your name here">

		<p>Your company/organization</p>
		<input id="company" type="text" placeholder="Company name here">

		<p>Your contact info</p>
		<input id="phone" type="text" placeholder="Phone number">
		<input id="email" type="text" placeholder="Email Address">

		<button id="form-button" class="button form-button">Next</button>

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
	
 

