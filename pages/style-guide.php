
<?php
	$textSpecimen = "ABCDEFGHIJKLMNOPQRSTUVWXYZ abcdefghijklmnopqrstuvwxyz 1234567890 !@#$%^&*()";

	$voices = [
		[
			"name" => "Calm voice",
			"class" => "calm-voice",
		],
		[
			"name" => "Intro voice",
			"class" => "intro-voice",
		],
		[
			"name" => "Medium Voice",
			"class" => "medium-voice",
		],
		[
			"name" => "Mono voice",
			"class" => "mono-voice",
		],
		[
			"name" => "Important Voice",
			"class" => "important-voice",
		],
		[
			"name" => "Attention voice",
			"class" => "attention-voice",
		],
		[
			"name" => "Loud voice",
			"class" => "loud-voice",
		],
	];
?>

<section>
	<div class="inner-column">

		<?php 
			$module["type"] = "page-intro";
			$module["title"] = "Style Guide";
			$module["subtitle"] = "";
			include("modules/page-intro.php");
		?>
		
		<type-patterns>

			<h2 class="attention-voice">Type patterns</h2>
			
			<?php foreach ($voices as $voice) { ?>
				<div class="voice">
					<div class="mono-voice"><?=$voice["name"]?></div>

					<div class="<?=$voice["class"]?>">
						<?=$textSpecimen?>
					</div>
				</div>
			<?php } ?>

		</type-patterns>

	</div>
</section>


<!-- then all of the page modules -->
<div class="inner-column">
	<?php include('module-loop.php'); ?>
</div>
