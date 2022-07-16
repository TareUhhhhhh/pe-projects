<page-content class="resume">
<div class="inner-column">

<section class="work-history">
	<h2 class='section-title'>Work History</h2>

<?php
	$json = file_get_contents('data/resumeData.json');
	$resumeData = json_decode($json, true);

	foreach ($resumeData as $entry) { 

		if ( $entry['type'] == "job" ) { 
			$company = $entry['company'];
			$jobTitle = $entry['title'];
			$yearsActive = $entry['years'];
	?>

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

	<?php	} } ?>

	</section>
	
	<section class="education">
		<h2 class="section-title">Education</h2>
	<?php
		foreach ($resumeData as $entry) { 
			if ($entry['type'] == "school") {
				$school = $entry['name'];
				$yearsAttended = $entry['years'];
	?>
		<article class="resume-entry school">
			<div class="school-name">
				<h2 class="school-name"><?=$entry['name']?></h2>
			</div>

			<div class="years-attended">
				<h3 class="years"><?=$entry['years']?></h3>
			</div>
		</article>
	<?php		}
	} ?>
	</section>

</div>
</page-content>