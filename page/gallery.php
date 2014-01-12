<!-- gallery -->
<div id="gallery">
<div id="slider" class="flexslider">
	<ul class="slides">
		<?php
		define('IMAGEPATH', 'gallery/');
		foreach(glob(IMAGEPATH.'*.jpg') as $filename){
		    $imag[] =  basename($filename);
		}
			for ($i=0; $i<count($imag); $i++)
				echo '<li><img src="gallery/' . $imag[$i] . '" /></li>';
		?>
	</ul>
</div>
<div id="carousel" class="flexslider_c">
	<ul class="slides">
		<?php
			for ($i=0; $i<count($imag); $i++)
				echo '<li><img src="gallery/' . $imag[$i] . '" /></li>';
		?>
	</ul>
</div>
</div>