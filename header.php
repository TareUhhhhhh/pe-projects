<!doctype html>
	<?php
		$theme = "light";

		if (isset($_POST['submit'])){
			$theme = $_POST['theme'];
		} 
	?>

<html lang='en'>
	<head>
		<?php include('head.php')?>
	</head>

<?php include('page-data.php')?>

	<body class='<?php echo $theme; ?>'>
		<header>
			<div class="inner-column">
				<nav class='info-nav'>
					<a href="?page=home">Home</a>
					<!-- <a href="?page=projects">Projects</a> -->
					<a href="?page=writing">Writing</a>
				</nav>

				<nav class='about-nav'>
					<a href="?page=about">About</a>
					<!-- <a href="?page=fun">Fun</a> -->
				</nav>

				<form method="POST">
					<label for='theme'>Theme</label>
					<select name="theme" id="theme">
						<option value=""> -- Choose a theme --</option>
						<option value="light">Light</option>
						<option value="dark">Dark</option>
					</select>

					<button name='submit'>Submit</button>
				</form>
			</div>
		</header>

		<main>
