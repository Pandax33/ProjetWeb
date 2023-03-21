<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Liste des articles</title>
</head>
<body>
  <h1>Liste des articles</h1>
  <ul>
    {foreach $articles as $article}
      <li><a href="article.php?id={$article.id}">{$article.titre}</a></li>
    {/foreach}
  </ul>
</body>
</html>