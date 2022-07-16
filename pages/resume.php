<page-content class="resume">
<div class="inner-column">

<!-- Get resume info from json file
Job info
Education Info -->
<?php
	$json = file_get_contents('data/resumeData.json');
	$resumeData = json_decode($json, true);

	foreach ($resumeData as $entry) { 

		if ( $entry['type'] == "job" ) { ?>

	<article class="resume-entry job">
		<div class="company">
			<!-- <h2 class="company">Company: </h2> -->

			<h2 class='company'><?=$entry['company']?></h2>
		</div>

		<div class="job-title">
			<!-- <h2 class="job-title">Job Title: </h2> -->

			<h3 class="job-title"><?=$entry['title']?></h3>
		</div>

		<div class="years-active">
			<!-- <h2 class="years-active">Years: </h2> -->

			<h3 class="years-active"><?=$entry['years']?></h3>
		</div>
	</article>

<?php	} 
	if ($entry['type'] == "school") { ?>
	
	<article class="resume-entry school">
		<div class="school-name">
			<h2 class="school-name"><?=$entry['name']?></h2>
		</div>

		<div class="years-attended">
			<h3 class="years"><?=$entry['years']?></h3>
	</article>
		</div>

<?php	}

} ?>

</div>
</page-content>