
<?php include ('data/articles.php'); ?>

<articles-intro>
	<header>
		<h2 class='attention-voice'>Read up on all the latest in luxury happenings</h2>

		<p>Never feel out of the loop with our trends and styles. Plus learn cool new stuff too.</p>
	</header>

	<article-grid>
		<ul class='article-list'>

			<?php foreach ($articles as $article) { ?>
				<li class='article'>
					<?php include('modules/article-card/template.php'); ?>
				</li>
			<?php } ?>

		</ul>
	</article-grid>
</articles-intro>
