<?php
<<<<<<< Updated upstream
/* Smarty version 4.3.0, created on 2023-03-28 21:29:47
=======
/* Smarty version 4.3.0, created on 2023-03-29 07:14:27
>>>>>>> Stashed changes
  from 'C:\Users\leanb\Documents\GitHub\ProjetWeb\Views\templates\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< Updated upstream
  'unifunc' => 'content_64235c4b54b526_21213306',
=======
  'unifunc' => 'content_6423e553c55db0_89885511',
>>>>>>> Stashed changes
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c795d7745358edaeee70dffb091513a08b21edf' => 
    array (
      0 => 'C:\\Users\\leanb\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\accueil.tpl',
<<<<<<< Updated upstream
      1 => 1680038984,
=======
      1 => 1680073846,
>>>>>>> Stashed changes
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar_a.tpl' => 1,
    'file:navbar_t.tpl' => 1,
    'file:navbar_s.tpl' => 1,
<<<<<<< Updated upstream
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64235c4b54b526_21213306 (Smarty_Internal_Template $_smarty_tpl) {
=======
    'file:trap.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6423e553c55db0_89885511 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> Stashed changes
?><!DOCTYPE html>
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
    <link rel="manifest" href="../../manifest.json">
  <link rel="apple-touch-icon" href="../../assets/icons/icon-96x96.png">
<<<<<<< Updated upstream
  <meta name="apple-mobile-web-app-status-bar" content="white">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="white">
=======
  <link rel="icon" type="image/x-icon" href="../../Views/css/images/LogoH.png">
  <meta name="apple-mobile-web-app-status-bar" content="white">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="white">
  <meta name="description" content="Page d'accueil, permettant de se diriger vers différentes pages et differents service">
>>>>>>> Stashed changes
    
</head>

<body>
<?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:navbar_a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } elseif ($_smarty_tpl->tpl_vars['role']->value == "teacher") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:navbar_t.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } elseif ($_smarty_tpl->tpl_vars['role']->value == "student") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:navbar_s.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
       <div class="container-fluid text-center">
        <div class="card-body  welcome-card text-center mx-auto" style="margin-top: 50px;" >
          <div class="card d-flex align-items-center justify-content-center">
          <h1 class="card-title">Bienvenue sur <span style="color: rgb(222, 115, 8);">Heraclès</span><span style="">, <?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
.</span></h1>
          </div>
        </div> 
      </div>
    
      
      <div class="row justify-content-center mt-5" style="min-height:90%">
      <h1 style="text-align: center; margin-bottom:20px">Les entreprises du moment</h1>
        <div class="col-md-4" style="width: 20rem;">
          <div class="card">
<<<<<<< Updated upstream
            <img src="../../../Views/css/orange.jpg" class="card-img" alt="Orange logo">
=======
            <img src="../../../Views/css/orange.webp" class="card-img" alt="Orange logo">
>>>>>>> Stashed changes
            <div class="card-body">
              <h5 class="card-title">Orange</h5>
              <p class="card-text" style="color:gray">Géant de la télecommunication, compte plus de 266 millions de clients dans le monde...</p>
              <a href="#" class="btn btn-success" style="justify-content:center">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-md-4" style="width: 20rem;">
          <div class="card">
<<<<<<< Updated upstream
            <img src="../../../Views/css/sanofi.jpg" class="card-img-top" alt="Sanofi logo">
=======
            <img src="../../../Views/css/sanofi.webp" class="card-img-top" alt="Sanofi logo">
>>>>>>> Stashed changes
            <div class="card-body">
                <h5 class="card-title">Sanofi</h5>
                <p class="card-text" style="color:gray">Sanofi est une entreprise transnationale française dont les activités incluent la pharmacie et les vaccins.</p>
                <a href="#" class="btn btn-success">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="width: 20rem;">
            <div class="card">
<<<<<<< Updated upstream
                <img src="../../../Views/css/toto.png" class="card-img-top" alt="Total logo">
=======
                <img src="../../../Views/css/toto.webp" class="card-img-top" alt="Total logo">
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
    <?php $_smarty_tpl->_subTemplateRender("file:trap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
>>>>>>> Stashed changes
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '<script'; ?>
>document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('hamburger');
    const navList = document.getElementById('navList');
  
    hamburger.addEventListener('click', () => {
      navList.classList.toggle('nav-list-active');
    });
  });
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../../app.js"><?php echo '</script'; ?>
>
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
