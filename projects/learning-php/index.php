<html>
	<head>
		<link rel='stylesheet' href='css/style.css'>
	</head>

	<body>
		<header>
		<div class="inner-column">
			<h1>TareUhhhhhh's PHP Practice</h1>
		</div>
		</header>

		<main>
			<section class="practice">
			<div class="inner-column">
				<article>
					<h2>String: </h2> 
					<h3><?php echo "This is where I am learning PHP stuff!";?></h3>
				</article>

				<article>
					<h2>Number: </h2>
					<h3><?php echo 42;?></h3>
				</article>

				<article>
					<h2>Number + Number: </h2>
					<h3><?php echo 19 + 47;?></h3>
				</article>

				<article>
					<h2>String + Number: </h2>
					<h3><?php echo "Current Year: 20" . 22;?></h3>
				</article>

				<article>
					<h2>Concatenated Strings: </h2>
					<h3><?php echo "Strings can be together like this. " . "Or " . "they " . "can " . "be " . "separated " . "like " . "this.";?></h3>
				</article>

				<article>
					<h2>Concatenated String + Number: </h2>
					<h3><?php echo "The number after this string is: " . 50;?></h3>
				</article>

				<article>
					<h2>String + Numbers Added Together:</h2>
					<h3>
						<?php echo "It seems to make more sense to have strings of sentences all together like this. It is much easier than concatenating when possible. You can still concatenate numbers added together...like this -- " . 58 + 92;?>
							
					</h3>
				</article>

				<article>
					<h2>Variable inside paragraph:</h2>
					<h3>
						<?php
							$variable = "snoring";

							echo "<p>The current sound I can hear is: " . $variable . "!</p>"
						?>
					</h3>
				</article>

				<article>
					<h2>Variable containing URL:</h2>
					<h3>
						<?php
							$website = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";

							echo "<a href=" . $website . " target='blank'>This</a> is a fantastic website!"
						?>
					</h3>
				</article>
			</div>
			</section>


			<section class="madlib">
			<div class="inner-column">
				<h2>MadLib Madness!!</h2>
				<p>
					<?php
						$nounOne = "mirror";
						$pluralNounOne = "shoes";
						$verbOne = "run";
						$verbTwo = "swim";
						$bodyParts = "arms";
						$adjectiveOne = "thin";
						$pluralNounTwo = "chips";
						$adjectiveTwo = "soggy";
					?>

					Today, every student has a computer small enough to fit into their <span><?=$nounOne?></span>. You can solve any math problem by simply pushing the computer’s little <span><?=$pluralNounOne?></span>.

					Computers can add, multiply, divide, and <span><?=$verbOne?></span>. They can also <span><?=$verbTwo?></span> better than a human.

					Some computers have their own <span><?=$bodyParts?></span>. Other’s have a/an <span><?=$adjectiveOne?></span> screen that shows all kinds of <span><?=$pluralNounTwo?></span> and <span><?=$adjectiveTwo?></span> figures.
				</p>
			</div>
			</section>
		</main>
		
	</body>
</html>