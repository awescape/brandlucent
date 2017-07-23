		<?php
			if(get_field('quote_text')) {
				echo '<section class="quote-banner" style="background-image: url(' . get_field('quote_background_image') . ');">';
					echo '<h4 class="quote-text">' . get_field('quote_text') . '</h4>';
				echo '</section>'; 
			}
		?> <!-- #quote-banner-->