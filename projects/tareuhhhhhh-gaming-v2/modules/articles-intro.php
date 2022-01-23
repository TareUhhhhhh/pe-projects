
<articles-intro>

  <header>
    <h2 class='attention-voice'>Latest News</h2>

    <p class='intro calm-voice'>These aren't real games. So there isn't ACTUALLY any news. How about a Q&A with our lead developer and CEO? Tara!</p>
  </header>

  <article-grid>
    <?php include('articles_data.php'); ?><!-- acting as an example database -->

    <?php foreach ($database as $article) { ?> 
      <?php include('article-card.php'); ?>
    <?php } ?>
  </article-grid>

</articles-intro>
