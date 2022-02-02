<style>
	p, label {
		padding: 10px;
	}

	input {
		margin: 10px;
	}
</style>

<?php
	
	if ( isset($_POST["submitted"])) {

		if ( isset($_POST["length"])) {
			$length = $_POST["length"];
			$length = floatval($length);
		}

		if ( isset($_POST["width"])) {
			$width = $_POST["width"];
			$width = floatval($width);
		}

		$area = $width * $length;

		echo "<p>If the length of a room is $length units and the width is  $width units, then the area of the entire room is $area square units</p>";
	}
?>

<form method="POST">
	<div>
		<label>
			Room length:
		</label>
		<input type="number" name="length">
	</div>

	<div>
		<label>
			Room width:
		</label>
		<input type="number" name="width">
	</div>

	<input type="submit" name="submitted">
</form>