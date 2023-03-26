<html>
<head>
  <meta charset="utf-8">
  <title>Liste des étudiants</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeStudent.css" type="text/css">
  <link rel="stylesheet" href="../../Views/css/navbar.css">
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