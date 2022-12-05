<?php
	if (isset($_POST['submitted'])) {
		if(isset($_POST['width'])) {
			$width = $_POST['width'];
		}

		if (isset($_POST['length'])) {
			$length = $_POST['length'];
		}

		$area = $width * $length;
	}
?>	

<div class="inner-column">
	<h2 class='efp attention-voice'>#7 Rectangular Area</h2>

	<form class='efp' method='POST'>
		<h3 class="info-voice">Enter Room Dimensions to Find Out the Area</h3>

		<h4 class="info-voice">*Use consistent units</h2>

		<div class="efp field">
			<label class="calm-voice">Room Width: </label>
			<input type="number" name='width' placeholder='Enter room width' required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Room Length: </label>
			<input type="number" name='length' placeholder='Enter room length' required>
		</div>

		<button class="efp" method='submit' name='submitted'>Calculate</button>

	</form>
	
	<?php
		if(isset($_POST['submitted'])) { ?>
			<p class="efp">Length: <?=$length?> units</p>

			<p class="efp">Width: <?=$width?> units</p>

			<p class="efp">Total Area: <?=$area?> square units</p>
	<?php	} ?>

</div>