<?php
if( isset($_GET["page"])) {
	$page = $_GET["page"];
}
else {
	$page = home;
}
?>

<section class="efp intro" id='intro'>
<div class="inner-column">
	<intro-content>
		<h1 class='intro loud-voice'>Tara's Formulaic Stuff</h1>

		<p class='intro normal-voice'>This is where I keep my collection of example forms. The information and inspiration for these forms comes from the book Exercises for Programmers by Brian Hogan.</p>
	</intro-content>
</div>
</section>


<?php
if ($page == "home") {
	include('forms.php');
}
else {
	$filepath = "forms/$page.php";
	include($filepath);
}
// If page = form ; display that form (include filename.php)
// 

 ?>