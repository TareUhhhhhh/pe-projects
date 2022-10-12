<section class="highlights">
	<h3 class="attention-voice">Project Highlights:</h3>
	
	<ul class="highlights-list">
		<?php
			foreach ($module["highlights"] as $highlight) { 
				echo "<li><p>$highlight</p></li>";
			} 
		 ?>
	</ul>
</section>
