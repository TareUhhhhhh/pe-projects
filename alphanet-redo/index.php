
<?php include('head.php'); ?>
<?php include('student-data.php'); ?>
	<header>
		<h1>Net of the <nobr>A-Threem</nobr></h1>
	</header>

		<main>
			<?php foreach ($students as $student) { ?>
				<article class='student <?= $student["id"] ?>'>
					<h1><?= $student["name"] ?></h1>

					<p><?= $student["intro"] ?></p>

					<a href="https://peprojects.dev/alpha-3/<?= $student["id"] ?>"><?= $student["link"] ?></a>
				</article>
			<?php } ?>
		</main>
	</body>
</html>




