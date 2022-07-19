<article class="resume-entry job">
	<div class="company">
		<h2 class='company'><?=$company?></h2>
	</div>

	<div class="job-title">
		<h3 class="job-title"><?=$jobTitle?></h3>
	</div>

	<div class="years-active">
		<h3 class="years-active"><?=$yearsActive?></h3>
	</div>

	<div class="responsibilities">
		<ul class="responsiblities">
			<?php
				foreach( $entry['responsibilities'] as $duty) { ?>

					<li><?=$duty?></li>

			<?php	} ?>
		</ul>
	</div>
</article>