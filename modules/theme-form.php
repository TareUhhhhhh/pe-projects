<!-- <div class="inner-column"> -->
	<div class="theme-form">
		<form method="POST" class='theme-select'>
			<label for='theme'>Theme</label>
			<select name="theme" id="theme">
				<option value="" disabled> -- Choose a theme --</option>
				<option value="light" <?= ($theme == "light") ? "selected" : "" ?>>Light</option>
				<option value="dark"<?= ($theme == "dark") ? "selected" : "" ?>>Dark</option>
			</select>

			<button name='userOptedTheme'>Submit</button>
		</form>
	</div>
<!-- </div> -->