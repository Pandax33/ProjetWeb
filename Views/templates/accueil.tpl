<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Views/css/accueil.css">
    <link rel="stylesheet" href="../../Views/css/navbar.css">
    <link rel="stylesheet" href="../../Views/css/footer.css">
    
</head>

<body>
{if $role == "admin"}
    {include file="navbar_a.tpl"}
  {elseif $role == "teacher"}
    {include file="navbar_t.tpl"}
  {elseif $role == "student"}
    {include file="navbar_s.tpl"}
  {/if}
       <div class="container-fluid text-center">
        <div class="card-body  welcome-card text-center mx-auto" style="margin-top: 50px;" >
          <div class="card d-flex align-items-center justify-content-center">
          <h1 class="card-title">Bienvenue sur <span style="color: rgb(222, 115, 8);">Heraclès</span><span style="">, {$titre}.</span></h1>
          </div>
        </div> 
      </div>
    
      
      <div class="row justify-content-center mt-5" style="min-height:90%">
      <h1 style="text-align: center; margin-bottom:20px">Les entreprises du moment</h1>
        <div class="col-md-4" style="width: 20rem;">
          <div class="card">
            <img src="../../../Views/css/orange.jpg" class="card-img" alt="Orange logo">
            <div class="card-body">
              <h5 class="card-title">Orange</h5>
              <p class="card-text" style="color:gray">Géant de la télecommunication, compte plus de 266 millions de clients dans le monde...</p>
              <a href="#" class="btn btn-success" style="justify-content:center">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-md-4" style="width: 20rem;">
          <div class="card">
            <img src="../../../Views/css/sanofi.jpg" class="card-img-top" alt="Sanofi logo">
            <div class="card-body">
                <h5 class="card-title">Sanofi</h5>
                <p class="card-text" style="color:gray">Sanofi est une entreprise transnationale française dont les activités incluent la pharmacie et les vaccins.</p>
                <a href="#" class="btn btn-success">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="width: 20rem;">
            <div class="card">
                <img src="../../../Views/css/toto.png" class="card-img-top" alt="Total logo">
              <div class="card-body">
                <h5 class="card-title">Total</h5>
                <p class="card-text" style="color:gray">TotalEnergies SE est une compagnie mondiale de production d’hydrocarbures et d’autres sources d’énergies.</p>
                <a href="#" class="btn btn-success">En savoir plus</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    </script>
</body>

</html>