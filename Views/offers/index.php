<h1> Liste des annonces </h1>
<?php
//On affiche les annonces
foreach($offers as $offer) : ?>
<article>
    <h2><a href="index.php?p=offers/lire/<?= $offer->ID ?>"><?=$offer -> entitled  ?></a></h2>
    <div><?=$offer -> description ?></div>

</article>
<?php endforeach; ?>