
<article class="resume-entry job">

	<h1 class='company important-voice'><?=$company?></h1>

	<p class="years-active mono-voice"><?=$yearsActive?></p>

	<p class="job-title intro-voice"><?=$jobTitle?></p>

	<ul class="responsiblities">
		<?php foreach( $entry['responsibilities'] as $duty) { ?>
			<li>
				<p><?=$duty?></p>
			</li>
		<?php	} ?>
	</ul>

</article>
