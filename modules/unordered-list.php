<h3 class='list-title'><?=$module['title']?></h3>

<ul class='<?$=activePage?>-list'>
	<?php foreach ($module['items'] as $item) { ?>
		<li><?=$item?></li>
	<?php	} ?>
</ul>