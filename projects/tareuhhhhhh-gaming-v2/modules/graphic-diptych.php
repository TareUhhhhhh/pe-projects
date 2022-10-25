<graphic-diptych>
	<text-content>
		<?php if(isset($pageContent["heading"])) { ?>
			<h1 class='intro-voice'><?=$pageContent["heading"]?></h1>
		<?php } ?>

		<?php if(isset($pageContent["intro"])) { ?>
			<p class='calm-voice'><?=$pageContent["intro"]?></p>
		<?php } ?>
	</text-content>

	<picture>
		<img src="<?=$pageContent['image']?>">
	</picture>
</graphic-diptych>
