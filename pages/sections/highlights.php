<section class="highlights">
	<h3>Project Highlights:</h3>
	<ul class='highlights-list'>
		<?php
			if ($section['type'] == 'highlights') {
			foreach ($section["highlights"] as $highlight) { ?>

				<li class='highlight-item'><?=$highlight?></li>

		<?php	} }
		?>
	</ul>
</section>