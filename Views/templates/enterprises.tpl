<html>
<head>
  <meta charset="utf-8">
  <title>Liste des Entreprises</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeOffre.css" type="text/css">
</head>
<body>
  <div class="container">

    <div class="card card-top">
      <div class="card-body">
        <span>Entreprises |</span> <span><a href="index.php?p=offers" >Offres</a></span>
      </div>
    </div>

    {if $myArray|@count > 0}
        {foreach from=$myArray item=object}
          <li>
            <div class="card mb-3" style="max-width: 900px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="../Views/css/enterprise.png" class="img-fluid rounded-start" alt="illustration d'entreprise">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">{$object->Name_E}</h5>
                    <h5 id="enter"> {$object->Activity_E} </h5>
                    <p class="card-text">Nombres d'étudiants en stage : {$object->Intership_E}</p> 
                    <p class="card-text"><small class="text-muted">Niveau de confiance : {$object->TrustRate_E} / 5</small></p>
                    </div>
                    <div class="button-group">
                      <button class="btn btn-orange">En savoir plus</button>
                      <button class="btn btn-green">Ajouter à la Wishlist</button>

                  </div>
                </div>
              </div>
            </div>
          </li>
        {/foreach}
      
    {else}
      <p>Aucune donnée trouvée.</p>
    {/if}
  </div>
</body>
</html>