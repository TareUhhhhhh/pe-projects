
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
			"name" => "Attention voice",
			"class" => "attention-voice",
		],
		[
			"name" => "Loud voice",
			"class" => "loud-voice",
		],
		[
			"name" => "Mono voice",
			"class" => "mono-voice",
		],
	];
?>

<section>
	<div class="inner-column">

		<?php 
			$module["type"] = "page-intro";
			$module["title"] = "Style Guide";
			$module["subtitle"] = "Welcome to the Style Guide.";
			include("modules/page-intro.php");
		?>
		
		<type-patterns>

			<p>Type patterns</p>
			
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


<!-- then al of the page modules -->
<?php include('module-loop.php'); ?>
