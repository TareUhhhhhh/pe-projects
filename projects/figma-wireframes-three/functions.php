<?php

	function renderModule($module) {
		$filePath = "pages/modules/$module[type].php";

		if ($module && file_exists($filePath)) {
			include($filePath);
		}
	}

	//is this even necessary?
	function renderComponent($component) {
		$filePath = "pages/components/$component[type].php";
		if ($component && file_exists($filePath)) {
			include($filePath);
		}
	}
?>