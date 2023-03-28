<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Héraclès | Liste de souhaits</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeOffre.css" type="text/css">
  <link rel="stylesheet" href="../../Views/css/navbar.css">
  <link rel="stylesheet" href="../../Views/css/footer.css">
</head>
<body>

<!--Si le role dans la session = admin, alors inclure navbar_s.tpl, de meme pour les roles teacher et student-->
  {if $role == "admin"}
    {include file="navbar_a.tpl"}
  {elseif $role == "teacher"}
    {include file="navbar_t.tpl"}
  {elseif $role == "student"}
    {include file="navbar_s.tpl"}
  {/if}

  <div class="container" style="min-height:90%"> 
    {if $myArray|@count > 0}
        {foreach from=$myArray item=object}
  
            {if $object->ID_P == $identifiant}
              {if $object ->state == "1" }

          <li>
            <div class="card mb-3" style="max-width: 900px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="../Views/css/enterprise.png" class="img-fluid rounded-start" alt="illustration d'entreprise">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">{$object->off} /</h5>
                    <h5 id="enter"> {$object->ent} </h5>
                    <p class="card-text">Durée du stage : {$object->duration}</p> 
                    <p class="card-text"><small class="text-muted">{$object->publish}</small></p>
                    </div>
                    <div class="button-group">
                    <a href="index.php?p=offers/detail/{$object->ID_O}" class="btn btn-orange">En savoir plus</a>
                    <a href="index.php?p=wishlist/removeWishlist/{$object->ID_O}"><button class="btn btn-red">Retirer de la Wishlist</a></button>

                  </div>
                </div>
              </div>
            </div>
          </li>
          {/if}
          
          {/if}
          
        {/foreach}
      
    {else}
      <p>Aucune donnée trouvée.</p>
    {/if}
    <p style="text-align: center;"><a href="index.php?p=offers" >Ajoutez des offres à votre liste de souhaits depuis la page d'offres</a></p>
    <a href="index.php?p=offers" class="back-b">Aller aux offres</a>
  </div>
  {include file="footer.tpl"}
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