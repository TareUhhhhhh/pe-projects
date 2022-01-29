<style>
	a {
		display: block;
		padding: 10px;
	}

	a + li {
		margin-top: 50px;
	}

	li {
		padding: 10px;
	}
</style>

<a href="hello-world.php">Hello</a>
<a href="quotes.php">Quotes</a>
<a href="mad-lib.php">Mad Lib</a>
<a href="retirement.php">Retirement</a>
<a href="rectangle-room.php">Rectangle Room</a>




<?php

$bands = ["Deftones", "The 1975", "Glass Animals", "Bullet for my Valentine", "Sugarcult", "Killswitch Engage"];

foreach ($bands as $band) {
	echo "<li>$band</li>";
}

$numbers = [29, 16, 19, 13, 11, 5, 7, 9];

foreach ($numbers as $number) {
	// echo "<li>$number</li>";
}

for ($i=0; $i<=34; $i++) {
	if ( $i !=12 and $i !=17 and $i != 23 ) {
		// echo "<li>$i</li>";
	}
}

foreach ($numbers as $number) {
	if ($number<20){
		// echo "<li>$number</li>";
	}
}

?>
