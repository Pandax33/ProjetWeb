<h1> Liste des pilotes </h1>
<?php
//On affiche les pilotes
foreach($teachers as $teacher) : ?>
<article>
    <h2><a href="index.php?p=teachers/detail/<?= $teacher->ID_P ?>"><?=$teacher -> Firstname_P  ?></a></h2>
    <div><?=$teacher -> mail ?></div>

</article>
<?php endforeach; ?>