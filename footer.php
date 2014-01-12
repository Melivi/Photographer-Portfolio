</div>
<!-- footer -->
<div id="footer">
	<?php
		echo '<p class="float_l">' . $copyright . '</p>';

		// sm = social media 
		$sm = array ( 	'FB' => 'facebook.png',
						'TW' => 'twitter.png',
						'GP' => 'googlep.png',
						'DA' => 'deviantart.png');
						
		echo '<div class="float_r">';
			if (!empty($da)) {
				echo '<a class="hoverimg" href="' . $da . '"><img src="img/' . $sm[DA] . '" /></a>';
			}
			if (!empty($fb)) {
				echo '<a class="hoverimg" href="' . $fb . '"><img src="img/' . $sm[FB] . '" /></a>';
			}
			if (!empty($tw)) {
				echo '<a class="hoverimg" href="' . $tw . '"><img src="img/' . $sm[TW] . '" /></a>';
			}
			if (!empty($gp)) {
				echo '<a class="hoverimg" href="' . $gp . '"><img src="img/' . $sm[GP] . '" /></a>';
			}
		echo '</div>';
	?>
</div>
</body>
</html>