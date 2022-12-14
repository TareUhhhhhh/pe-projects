<contact-form>
	<?php
		if (isset($_POST['first'])) {
			$first = $_POST['first'];
		}
		else {
			$first = "First Name";
		}

		if (isset($_POST['last'])) {
			$last = $_POST['last'];
		}
		else {
			$last = "Last Name";
		}

		if (isset($_POST['email'])) {
			$email = $_POST['email'];
		}
		else {
			$email = "Email Address";
		}


	?>



	<form action="POST">
		<div class="form-field">
			<label for="first-name" class="calm-voice">First Name</label>
			<input type="text" id="first-name" placeholder="<?=$first?>" required>
		</div>

		<div class="form-field">
			<label for="last-name" class="calm-voice">Last Name</label>
			<input type="text" id="last-name" placeholder="<?=$last?>" required>
		</div>

		<div class="form-field">
			<label for="email" class="calm-voice">Email Address</label>
			<input type="text" id="email" placeholder="<?=$email?>" required>
		</div>

		<div class="form-field reason">
			<label for="reason" class="calm-voice">Reason For Contacting</label>

			<select name="reason" id="reason-select" required>
				<option value="">Select One</option>
				<option value="one">Reason 1</option>
				<option value="two">Reason 2</option>
			</select>
		</div>

		<div class="form-field message">
			<label for="message">Message</label>

			<input type="textarea" name="message" id="message" rows="4" columns="50">
		</div>

		<button input='submit' name='submitted' class="button">Learn More</button>
	</form>
</contact-form>