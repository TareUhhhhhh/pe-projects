<?php

	$theme = "";

	//If a cookie exists that saved the theme
	if ( isset($_COOKIE["optedTheme"]) ) {
		//use that value for the $theme
		$theme = $_COOKIE["optedTheme"];
	}

	//If the user has selected a theme, 
	if ( isset($_POST['userOptedTheme']) ){
		//get the users selected choice from dropdown
		$theme = $_POST['theme']; 
		//set the theme
		//save theme to the cookie
		setcookie( "optedTheme", $theme );
	} 
	else {
		$theme = "dark";
		setcookie( "optedTheme", $theme );
	}