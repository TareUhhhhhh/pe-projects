<?php
	if (isset($_GET["project"])) {
		$activeProject = $_GET["project"];
	}

	$studyData = file_get_contents('pages/projectData.json');
	$caseData = json_decode($studyData, true);
?>

<!-- 	//display data decoded from json, depending on the project in the query string

	//if query string identified = json data slug/title/link, load a case study card with the rest of that projects case study information


			//if project slug or title = query string id - load the case study card - on case-study php -->
		<div class="inner-column">
			<section class="page-content <?=$activeProject?>">
				<?php include('pages/caseCard.php'); ?>
			</section>
		</div> 
