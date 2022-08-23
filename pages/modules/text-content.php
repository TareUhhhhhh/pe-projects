<section class="content">
	<h3 class="section-title"><?=$module['title']?></h3>
	<?php
		foreach ($module['paragraph'] as $paragraph) { 
			echo "<p>" . $paragraph . "</p>";
		}
	?>
</section>