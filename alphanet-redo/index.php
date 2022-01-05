<?php include('student-data.php');
?>

<link rel="stylesheet" href="style.css">

<h1>The Net of the A-Threem</h1>

<main>
	<?php foreach ($students as $student) { ?>
		<article class='student <?= $student["id"] ?>'>
			<h1><?= $student["name"] ?></h1>

			<p><?= $student["intro"] ?></p>

			<a href="https://peprojects.dev/alpha-3/<?= $student["id"] ?>"><?= $student["link"] ?></a>
		</article>
	<?php } ?>
</main>





