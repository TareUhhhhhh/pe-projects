<!-- <section class="intro">
<div class="inner-column">
	<!-- <h1><?= ucwords($page)?> Page</h1> -->

<!-- 	<p>This is the intro section for the <?=$page?> Page. This will explain what this page is for. Click one of the links in the header area for a different page!</p> -->
<!-- </div>
</section> -->

<section class="<?=$page?>">
<div class="inner-column">
	<?php	pullTemplate($page); ?>
</div>
</section>