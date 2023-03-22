<html>
<head>
  <meta charset="utf-8">
  <title>Liste des articles</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeOffre.css" type="text/css">
</head>
<body>
  <div class="container">
    <div class="card card-top">
      <div class="card-body">
        <span>Offres</span> <span>| Entreprises</span> <span><a href="index.php?p=enterprises/modifier">Oui</a></span>
      </div>
    </div>

    {if $myArray|@count > 0}
      <ul>
        {foreach from=$myArray item=object}
          <li>
                <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{$object->Name_E}</h5>
            <h4 class="card-title">{$object->Activity_E}</h4>
            <h2 class="card-title">{$object->Intership_E}</h4>
            <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
        </div>
          </li>
        {/foreach}
      </ul>
    {else}
      <p>Aucune donnée trouvée.</p>
    {/if}
  </div>
</body>
</html>