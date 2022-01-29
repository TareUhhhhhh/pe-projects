<?php

	if ( isset($_POST["submitted"] ) ) {
		if ( isset($_POST["name"] ) ) {
			$name = ($_POST["name"] );
			echo "<h1>Hello, $name!</h1>";
		}
	};

?>


<form method="POST">
	
	<p>Hello, World.</p>

	<label for="name">Your name: </label>
	<input type="text" name="name">

	<input type="submit" name="submitted">

</form>