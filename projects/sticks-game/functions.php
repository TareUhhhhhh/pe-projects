<?php

// Get requested page id (via querystring)
if ( isset($_GET["page"]) ) {
	$activePage = $_GET["page"];
} else {
	$activePage = "home";
}

function renderPage($pageName) {
	$filePath = "pages/$pageName.php";
	if ($pageName && file_exists($filePath)) {
		include($filePath);
	}
}

function renderModule($module) {
	$filePath = "pages/modules/$module[type].php";
	if ($module && file_exists($filePath)) {
		include($filePath);
	}
}