<!DOCTYPE html>
<html lang="pl" xml:lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<!-- header -->
<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" />
<title><?php echo 'Grace J. Raff - ' . Title($_GET['go']); ?></title>
<meta name="keywords" content="Photography" />
<meta name="description" content="Photography Grace J. Raff" />
<meta name="author" content="" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="js/mail.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/flexslider.js"></script>
<script type="text/javascript" src="js/hover.js"></script>
</head>
<body>
<!-- logo -->
<div id="top">
<?php 
	echo '<div class="logo_n_l" id="text_r"><p>' . $name . '</p></div>'; 
?>
<div class="logo"><a href="index.php"><img value="J.F. Photography" src="img/logo.png" /></a></div>
<?php 
	echo '<div class="logo_n_l" id="text_l"><p>' . $lastname . '</p></div>'; 
?>
</div>