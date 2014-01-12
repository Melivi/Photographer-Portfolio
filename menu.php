<!-- menu -->
<div id="menu">
	<ul>
	<?php
		if (!$add_page) exit;
		$menu = array (	'home' => 'home.png',
						'about'=> 'about.png',
						'gallery' => 'gallery.png',
						'contact' => 'contact.png');
		
		foreach ($menu as $page => $imgname) {
		
		echo '<li><a href="index.php?go=' . $page . '" ><img src="img/' . $imgname . '" /></a></li>'; 
		}
	?>
	</ul>
	<div class="flexslider_m">
		<ul class="slides">
			<li><span>Passion</span>
			<p>Photography is my passion for many years. This passion that has become my second profession, I spend a lot of time and energy.</p></li>

			<li><span>Photography</span>
			<p>I photograph for my own pleasure and for your order. Beautiful photos are a great gift for yourself or a loved one. Investment in yourself, memorial recalling the memories...</p></li>

			<li><span>Professionally</span>
			<p>It all depends on your wishes. For each task, a photographic walk up individually, taking into account the nature of the subject and waiting to be photographed.</p></li>
		</ul>
	</div>
</div>
<div class="content">
