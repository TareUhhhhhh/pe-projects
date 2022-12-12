<section class='project-links'>
	<?php if (isset($module["siteLink"])) { ?>
		<a class='button project-link' target='<?=$module['slug']?>' href="<?=$module["siteLink"]?>">Live Site</a>
	<?php } ?>
	
	<?php if(isset($module['gitLink'])) { ?>
		<a class='button github-link' target="<?=$module['gitLink']?>" href="<?=$module['gitLink']?>">GitHub Link</a>
	<?php } ?>
</section>
