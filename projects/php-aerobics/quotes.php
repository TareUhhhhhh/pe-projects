<style>
	.field, p {
		padding: 10px;
	}

	input	 {
		margin-left: 10px;
	}

</style>

<?php

	if ( isset($_POST["submitted"] ) ) {
		if ( isset($_POST["quote"] ) ) {
			$quote = $_POST["quote"];
		}

		if ( isset($_POST["author"]) ) {
			$author = $_POST["author"];
		}

		echo "<p>$author said \"$quote\" at some point in time.</p>";
	}
?>

<form method="POST">

	<div class="field">
		<label>Enter quote</label>
		<input type="text" name="quote">		
	</div>

	<div class="field">
		<label>Who said or wrote it?</label>
		<input type="text" name="author">
	</div>


	<input type="submit" name="submitted">
</form>

<?php
