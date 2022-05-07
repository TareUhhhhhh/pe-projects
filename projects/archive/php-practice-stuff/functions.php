<?php
	function page() {
		if (isset($_GET["page"])) {
			return $_GET["page"];
		} else {
			return "home";
		}
	}