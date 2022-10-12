<?php
	// global functions
	include("functions.php");

	// the "database"
	include('page-data.php');


	include('header.php');
	
	renderPage($activePage);
	
	include('footer.php');