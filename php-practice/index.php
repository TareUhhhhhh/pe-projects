<p>PHP practice sheet</p>

<?php 
	$nounOne = "butterfly";
	$pluralNounOne = "trees";
	$verbOne = "flip";
	$verbTwo = "sing";
	$bodyPart = "head";
	$adjectiveOne = "funny";
	$pluralNounTwo = "tutus";
	$adjectiveTwo = "yellow";

	echo "<p>Today, every student has a computer small enough to fit into their " . $nounOne . ". You can solve any math problem by simply pushing the computer’s little " . $pluralNounOne . ". Computers can add, multiply, divide, and " . $verbOne . ". They can also " . $verbTwo . "better than a human. Some computers have their own " . $bodyPart . "s. Others have a/an " . $adjectiveOne . " screen that shows all kinds of " . $pluralNounTwo . " and " . $adjectiveTwo . " figures.</p>"
?>

<?php 

	$adjective = "cold";
	$adjectiveTwo = "blue";
	$noun = "monkey";
	$nounTwo = "tennis ball";
	$nounThree = "bench";
	$game = "tetherball";
	$nounFour = "squirrel";
	$verb = "swim";
	$verbTwo = "yell";
	$nounFive = "leftover cheeseburger";
	$verbThree = "hide";
	$nounSix = "airplane";
	$plant = "aloe";
	$bodyPart = "elbow";
	$place = "grocery store";
	$verbFour = "drive";
	$adjectiveThree = "bumpy";
	$number = "3";
	$nounSeven = "cricket";
?>

<p>A vacation is when you take a trip to some <?php echo $adjective; ?> place
with your <?php echo $adjectiveTwo; ?> family. Usually you go to some place
that is near a/an <?php echo $noun; ?> or up on a/an <?php echo $nounTwo; ?>.
A good vacation place is one where you can ride <?php echo $nounThree; ?>s
or play <?php echo $game; ?> or go hunting for <?php echo $nounFour; ?> . I like
to spend my time <?php echo $verb; ?>ing or <?php echo $verbTwo; ?>ing.
When parents go on a vacation, they spend their time eating
three <?=$nounFive?> a day, and fathers play golf, and mothers
sit around <?=$verbThree?>ing. Last summer, my little brother
fell in a/an <?=$nounSix?> and got poison <?=$plant?> all
over his <?=$bodyPart?>. My family is going to go to (the)
<?=$place?>, and I will practice <?=$verbFour?>ing. Parents
need vacations more than kids because parents are always very
<?=$adjectiveThree?> and because they have to work <?=$number?> 
hours every day all year making enough <?=$nounSeven?>s to pay
for the vacation.</p>

<?php

	$firstName = Tara;
	$lastName = Haskamp;
	$fullName = $firstName . " " . $lastName;

	echo "<p>First Name: " . $firstName . "</p> <p> Last Name: " . $lastName . "</p> <p>Full Name: " . $fullName . "</p>"

?>

<?php

	$totalStudents = 27;
	$absentStudents = 2;
	$presentStudents = $totalStudents - $absentStudents;

?>

<h1>Total Students in class today: <?=$presentStudents?></h1>

<?php 

	$age = 32;

	if ($age < 5) {
	echo "<h2>Free kids meal for you!</h2>";
}	else if ($age > 65) {
	echo "<h2>Senior Citizen AARP discount!</h2>";
}	else {
	echo "<h2>Standard Price applies</h2>";
}

?>

<?php 

	$house = "clean";
	$dishes = "clean";
	$laundry = "clean";
	$time = 4;
	$mood = "relaxed";

	if ($house == "clean" && $dishes == "clean" && $laundry == "clean" && $time < 6) {
		echo "It's time for Netflix & chill!";
	} else {

	}

?>

<h2>Since the house is <?=$house?>, the dishes are <?=$dishes?>, the laundry is <?=$laundry?>, and it is <?=$time?>:00, I am <?=$mood?>!</h2>


<?php

	$ = ;

?>















