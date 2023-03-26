<html>

<head>
  <meta charset="utf-8">
  <title>Liste des Entreprises</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeEnterprise.css" type="text/css">
  <link rel="stylesheet" href="../../Views/css/navbar.css">
  <meta name="description" content="Liste des entreprises proposées avec leurs informations principales telle que leurs adresses, leur nom, leur activité...">
  <meta name="viewport" content="width=device-width">
  </head>

<body>
{if $role == "admin"}
  {include file="navbar_a.tpl"}
{elseif $role == "teacher"}
  {include file="navbar_t.tpl"}
{elseif $role == "student"}
  {include file="navbar_s.tpl"}
{/if}

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
  <script>document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('hamburger');
    const navList = document.getElementById('navList');
  
    hamburger.addEventListener('click', () => {
      navList.classList.toggle('nav-list-active');
    });
  });
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>