<h1> Liste des annonces </h1>
<?php
//On affiche les annonces
foreach($offers as $offer) : ?>
<article>
    <h2><a href="index.php?p=offers/detail/<?= $offer->ID_O ?>"><?=$offer -> Entitled_O  ?></a></h2>
    <div><?=$offer -> Description ?></div>

</article>
<?php endforeach; ?>