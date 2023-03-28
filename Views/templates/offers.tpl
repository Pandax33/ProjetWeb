<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Héraclès | Offres</title>
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

  <div class="container"style="min-height:90%"> 

    <div class="card card-top">
      <div class="card-body">
        <span class="sel">Offres |</span><span class="sel"><a href="index.php?p=enterprises">Entreprises</a></span>
      </div>

      
    </div>

    <div class="search-container">
  <form id="search-form">
    <input type="text" id="search-input" placeholder="Rechercher une offre...">
    <button type="submit" class="btn btn-search">Rechercher</button>
  </form>
  <div class="filter-container">
    <label for="filter">Filtrer par :</label>
    <select id="filter">
      <option value="all">Tous</option>
      {foreach $city as $item}
        <option>{$item->Name}</option>
      {/foreach}
    </select>
  </div>
</div>
     <!--Si le role est admin, inclure le fichier createoffer.tpl-->
    {if $role == "admin"}
      <span>{include file="buttons/c_offer_b.tpl"}
      
      {include file="buttons/m_offer_b.tpl"}</span>
    {/if}

    {if $myArray|@count > 0}
        {foreach from=$myArray item=object}
          

          <li style="width: 70%; ">
            <div class="card mb-3" style="max-width: 900px;background-color:rgba(255, 255, 255, 0.625)">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="../Views/css/enterprise.png" class="img-fluid rounded-start" alt="illustration d'entreprise">
                </div>
                <div class="col-md-8">
                  <div class="card-body">

                  {if $object->State == 1}
                    <h5 class="card-title">{$object->Entitled_O} /</h5>
                  {else}
                    <h5 class="card-title">❌{$object->Entitled_O} /</h5>
                  {/if}
          
                    <h5 id="enter"><a href="index.php?p=offers/list/{$object->ID_E}">{$object->ent} </a><span> à <a href="index.php?p=offers/ville/{$object->Name}">{$object->Name} </a></span></h5>

                    <p class="card-text">Durée du stage : {$object->Duration_O}</p> 
                    <p class="card-text"><small class="text-muted">{$object->DatePublish_O}</small></p>
                    </div>
                    <div class="button-group">
                    <a href="index.php?p=offers/detail/{$object->ID_O}" class="btn btn-orange">En savoir plus</a>
                    {if $object->wish == 0 && $role == "student"}
                      <a href="index.php?p=offers/addWishlist/{$object->ID_O}"><button class="btn btn-green">Ajouter à la Wishlist</a></button>
                    {elseif $object->wish == 1 && $role == "student"}
                      <a href="index.php?p=offers/removeWishlist/{$object->ID_O}"><button class="btn btn-red">Retirer de la Wishlist</a></button>
                    {/if}

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
  <script src='../../Views/javascript/offers.js'></script>
</body>
</html>