<?php
	$name = "";
	$message = "Fill out the form first!";
	$submitted = isset($_POST["submitted"]);

	if ($submitted) {
		if ( !empty($_POST["name"]) ) {
			$name = ($_POST["name"] );
			$message = "Hello, $name!";
		}
	};
?>


<form method="POST">
	
	<p>Hello, World.</p>

	<label for="name">Your name: </label>
	<input id="name" type="text" name="name" value="<?=$name?>" placeholder="Cher">

	<button name="submitted">
		Submit
	</button>

</form>

<h1><?=$message?></h1>