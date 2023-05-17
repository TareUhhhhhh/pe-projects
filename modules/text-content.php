
<section class="content">

	<?php if(isset($module['title'])) { ?>
		<h3 class="section-title attention-voice"><?=$module['title']?></h3>
	<?php } ?>

	<?php if(isset($module['section-heading'])) { ?>
		<h4 class="section-title medium-voice"><?=$module['section-heading']?></h4>
	<?php } ?>

	<?php
		foreach ($module['paragraph'] as $paragraph) { 
			echo "<p>$paragraph</p>";
		}
	?>
</section>
