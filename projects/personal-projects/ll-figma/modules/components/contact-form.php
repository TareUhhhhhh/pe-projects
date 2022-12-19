
<?php
	$message = "";
	$first = "First Name";
	$last = "Last Name";
	$email = "Email Address";

	if(isset($_POST['submitted'])) {
		$message = "Thank you!";

		if (isset($_POST['first'])) {
			$first = $_POST['first'];
		}

		if (isset($_POST['last'])) {
			$last = $_POST['last'];
		}

		if (isset($_POST['email'])) {
			$email = $_POST['email'];
		}
	}
?>



<form class="contact-form" method="POST">
	<div class="form-field">
		<label for="first-name" class="quiet-voice">First Name</label>
		<input type="text" id="first-name" placeholder="<?=$first?>" required>
	</div>

	<div class="form-field">
		<label for="last-name" class="quiet-voice">Last Name</label>
		<input type="text" id="last-name" placeholder="<?=$last?>" required>
	</div>

	<div class="form-field">
		<label for="email" class="quiet-voice">Email Address</label>
		<input type="text" id="email" placeholder="<?=$email?>" required>
	</div>

	<div class="form-field reason">
		<label for="reason" class="quiet-voice">Reason For Contacting</label>

		<select name="reason" id="reason-select" required>
			<option value="">Select One</option>
			<option value="one">Reason Number 1</option>
			<option value="two">Reason Number 2</option>
		</select>
	</div>

	<div class="form-field message">
		<label for="message" class="quiet-voice" placeholder="Type your message here...">Message (optional)</label>

		<textarea type="textarea" name="message" id="message" rows="4" columns="50"></textarea>
	</div>

	<button type="submit" name="submitted" class="button">Learn More</button>

	<?php if(isset($_POST['submitted'])) { ?>
		<p><?=$message?></p>
	<?php } ?>
</form>
