<html>

<head>
  <meta charset="utf-8">
  <title>Liste des Entreprises</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeEnterprise.css" type="text/css">
  <meta name="description" content="Liste des entreprises proposées avec leurs informations principales telle que leurs adresses, leur nom, leur activité...">
  <meta name="viewport" content="width=device-width">
  </head>

<body>
  <div class="container">

    <div class="card card-top">
      <div class="card-body">
        <span>Entreprises |</span><span><a href="index.php?p=offers">Offres</a></span>
      </div>
    </div>
  </div>

  <div class="container">
        <div class="row">

        {if $myArray|@count > 0}
          {foreach from=$myArray item=object}
            <div class="col-lg-4 col-md-6 col-sm-12 ecart">
                <div class="card" style="width: 18rem;">
                  <img src="../Views/css/enterprise.png" class="card-img-top" alt="Image 1">
                  <div class="card-body">
                    <h5 class="card-title truncate-text" >{$object->Name_E}</h5>
                    <p class="card-text sector">{$object->Activity_E}</p>
                    <p class="card-text texte">Stagiaires embauchés : {$object->Intership_E}</p>
                    <p class="card-text texte"><small class="text-muted">Niveau de confiance : {$object->TrustRate_E} / 5</small></p>
                    <button class="btn btn-orange">En savoir plus</button>
  
                  </div>
                </div>
            </div>  
          {/foreach}
          {else}
          <p>Aucune donnée trouvée.</p>
          {/if}

        </div>
    </div>
 
    </div>
  </section>

</body>

</html>