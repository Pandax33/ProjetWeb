<html>
<head>
  <meta charset="utf-8">
  <title>Liste des étudiants</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeStudent.css" type="text/css">
</head>
<body>
  <div class="container">

    <div class="card card-top">
      <div class="card-body">
        <span>Etudiants |</span>
      </div>
    </div>

    {if $myArray|@count > 0}
        {foreach from=$myArray item=object}


          <li>
            <div class="card mb-3" style="max-width: 900px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="../Views/css/pp.png" class="img-fluid rounded-start" alt="illustration d'entreprise">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">{$object->Firstname_P} {$object->Lastname_P}</h5>
                    <p class="card-text">{$object->mail}</p> 
                    <p class="card-text"><small class="text-muted">Centre : {$object->Name_Center}</small></p>
                    </div>
                    <div class="button-group">
                      <button class="btn btn-orange">Voir les statistiques</button>
                      <button class="btn btn-green">Modifier</button>

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