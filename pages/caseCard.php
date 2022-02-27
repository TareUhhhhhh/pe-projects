<?php
	$studyData = file_get_contents('pages/projectData.json');
	$caseData = json_decode($studyData, true);

	foreach($caseData as $case) {
		if ("project" == $case["caseStudy"]){
			$cardTitle = $case["title"];
		}
	}
?>

<div class="inner-column">
	<section>
		<? echo "$cardTitle"; ?>
	</section>
</div>