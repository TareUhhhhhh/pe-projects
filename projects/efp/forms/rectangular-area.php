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
	<section class="info">
		<h2 class='efp attention-voice'>#7 Rectangular Area</h2>

		<h3 class="intro-voice">Enter Room Dimensions to Find Out the Area</h3>

		<h4 class="intro-voice">*Use consistent units</h2>
	</section>

	<form  method='POST'>
		<div class="efp field">
			<label class="calm-voice">Room Width: </label>
			<input type="number" name='width' placeholder='Enter room width' required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Room Length: </label>
			<input type="number" name='length' placeholder='Enter room length' required>
		</div>

		<button  method='submit' name='submitted'>Calculate</button>

	</form>
	
	<?php
		if(isset($_POST['submitted'])) { ?>
			<p >Length: <?=$length?> units</p>

			<p >Width: <?=$width?> units</p>

			<p >Total Area: <?=$area?> square units</p>
	<?php	} ?>

</div>