<h1> Liste des entreprises </h1>
<?php
//On affiche les enterprises
foreach($enterprises as $enterprise) : ?>
<article>
    <h2><a href="index.php?p=enterprises/detail/<?= $enterprise->ID_E ?>"><?=$enterprise -> Name_E  ?></a></h2>
    <div><?=$enterprise -> Activity_E ?></div>
</article>
<?php endforeach; ?>