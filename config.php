 <?php 

// Checking $add_site there
if(!$add_page) exit; 

// Title
function Title($go) {
    $array_title = array (	'home' => 'Home',
							'' => 'Home', //empty
							'about'=> 'About',
							'contact' => 'Contact',
							'gallery' => 'Gallery' );
							
    foreach($array_title as $page => $title) 
    if($go == $page) return $title;
}


// Your Name - Logo / TOP
$name = "Grace";
// Your Lastname - Logo / TOP
$lastname = "J. Raff";

// Copypright footer
$copyright = "© 2014 Grace J. Raff - Photography";
//Social media footer
$da = ""; // Deviantart link
$fb = "http://www.facebook.com/GraceJRaff"; // Facebook link
$tw = "http://www.twitter.com/@GraceJRaff"; // Twitter link
$gp = "http://plus.google.com/GraceJRaff"; // Google+ link

?> 