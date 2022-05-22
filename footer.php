		</main>

		<footer>
		<div class="inner-column">
			<section class='contact'>
				<p class="email">Feel free to <a href="mailto:tara@tareuhhhhhh.com" target='email'>email me</a> to chat!</p>

				<p class="substack">You can also check out my writing that is posted to <a href="https://tarahaskamp.substack.com/" target='substack'>Substack</a>.</p>

				<p class="github">I also keep my projects on <a href="https://github.com/TareUhhhhhh" target='github'>Github</a> if you want to check them out!</p>	
			</section>
			
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
		</div>
		</footer>
	</body>
</html>