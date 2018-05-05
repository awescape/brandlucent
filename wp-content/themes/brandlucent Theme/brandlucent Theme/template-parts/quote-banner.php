		<?php
			if(get_field('quote_text')) {
				echo '<section class="quote-banner" style="background-image: url(' . get_field('quote_background_image') . ');">';
					echo '<h4 class="quote-text hideme">' . get_field('quote_text') . '</h4>';

					if(get_field('quote_author')) {
					echo '<h5 class="quote-author hideme">' . get_field('quote_author') . '</h5>';
					}
				echo '</section>'; 
			}
		?> <!-- #quote-banner-->

