<section class="project">
<div class="inner-column">
	<?php include('module-loop.php'); ?>
</div>
</section>

<?php
	if ($_GET["project"] == "zen-responsive-garden") {
		include("pages/zen-responsive-garden.php");
	}
?>