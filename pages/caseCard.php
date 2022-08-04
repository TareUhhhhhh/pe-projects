<!-- NOT FUNCTIONING -->

<?php
	$studyData = file_get_contents('data/projectData.json');
	$caseData = json_decode($studyData, true);

	foreach($caseData as $case) {
		// if ("project" == $case["caseStudy"]){
		// 	$cardTitle = $case["title"];
		// }
	}
?>

<div class="inner-column">
	<section>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus enim voluptas fugiat ex. Fugiat ipsam labore veniam alias, expedita, vel soluta eius repellendus, qui suscipit adipisci, minima quo dolorem nihil?</p>
	</section>
</div>