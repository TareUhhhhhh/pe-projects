<page-content class="resume">
<div class="inner-column">

	<?php include('module-loop.php');?>

	<section class="work-history">
		<h1 class='section-title attention-voice'>Work History</h1>

		<?php
			$json = file_get_contents('data/resumeData.json');
			$resumeData = json_decode($json, true);

			foreach ($resumeData as $entry) { 

				if ( $entry['type'] == "job" ) { 
					$company = $entry['company'];
					$jobTitle = $entry['title'];
					$yearsActive = $entry['years'];

					include('cards/job-card.php');
				} 
		} ?>
	</section>
	
	<section class="education">
		<h2 class="section-title attention-voice">Education</h2>
		<?php
			foreach ($resumeData as $entry) { 
				if ($entry['type'] == "school") {
					$school = $entry['name'];
					$yearsAttended = $entry['years'];

					include('cards/school-card.php');
				}
		} ?>
	</section>

</div>
</page-content>
