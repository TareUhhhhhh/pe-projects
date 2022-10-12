
<section class="content">

	<h3 class="section-title attention-voice">
		<?=$module['title']?>
	</h3>

	<?php
		foreach ($module['paragraph'] as $paragraph) { 
			echo "<p>$paragraph</p>";
		}
	?>
</section>
