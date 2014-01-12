<?php
	// page true
	$add_page = true;
	
	// include config
	include "config.php";

	// include header , logo , styles
	include "header.php";

	// include menu
	include "menu.php";
	
    // $go method GET 
    $go = $_GET['go'];
      
    // check $go
    if(!empty($go)) {
        // check files
        if(is_file("page/$go.php")) include "page/$go.php";
        // message, if the file doesn't exist
        else echo "<p>Sorry, there is no such page, or is under construction.</p>";
    }
    // if $go is empty then display home page
    else {
		$go = $_GET['home']; 
		include "page/home.php";
	}

	include "footer.php";
	
	?>