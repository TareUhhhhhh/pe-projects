<!doctype html>
	<?php
		$theme = "";

		//If a cookie exists that saved the theme
		if ( isset($_COOKIE["optedTheme"]) ) {
			//use that value for the $theme
			$theme = $_COOKIE["optedTheme"];
		}

		//If the user has selected a theme, 
		if ( isset($_POST['userOptedTheme']) ){
			//get the users selected choice from dropdown
			$theme = $_POST['theme']; 
			//set the theme
			//save theme to the cookie
			setcookie( "optedTheme", $theme );
		} 
	?>

<html lang='en'>
	<head>
		<?php include('head.php')?>
	</head>

<?php include('page-data.php')?>

	<body class='grid <?php echo $theme; ?>'>
		<header>			
			<div class="inner-column">
				<nav class='info-nav'>
					<a href="?">Home</a>
					<!-- <a href="?page=projects">Projects</a> -->
					<a href="?page=writing">Writing</a>
				</nav>

				<nav class='about-nav'>
					<a href="?page=about">About</a>
					<!-- <a href="?page=fun">Fun</a> -->
				</nav>

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
		</header>

		<main>
