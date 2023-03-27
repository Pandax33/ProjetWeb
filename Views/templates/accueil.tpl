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
        <div class="card-body  welcome-card text-center mx-auto" >
          <div class="card d-flex align-items-center justify-content-center">
          <h1 class="card-title">Welcome to <span style="color: rgb(222, 115, 8);">Heraclès</span></h1>
          </div>
        </div> 
      </div>
    
      
      <div class="row justify-content-center mt-5">
        <div class="col-md-4" style="width: 20rem;">
          <div class="card">
            <img src="img3.jpg" class="card-img-top" alt="ent1">
            <div class="card-body">
              <h5 class="card-title">ENT 1</h5>
              <p class="card-text">This is a card with some text.</p>
              <a href="#" class="btn btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4" style="width: 20rem;">
          <div class="card">
            <img src="img3.jpg" class="card-img-top" alt="ent2">
            <div class="card-body">
                <h5 class="card-title">ENT 2</h5>
                <p class="card-text">This is another card with some text.</p>
                <a href="#" class="btn btn-success">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="width: 20rem;">
            <div class="card">
                <img src="img3.jpg" class="card-img-top" alt="ent3">
              <div class="card-body">
                <h5 class="card-title">ENT 3</h5>
                <p class="card-text">This is a third card with some text.</p>
                <a href="#" class="btn btn-success">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
  </script>
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