<h1> Liste des étudiants </h1>
<?php
//On affiche les annonces
foreach($students as $student) : ?>
<article>
    <h2><a href="index.php?p=students/detail/<?= $student->ID_P ?>"><?=$student -> Firstname_P  ?></a></h2>
    <div><?=$student -> mail ?></div>

</article>
<?php endforeach; ?>