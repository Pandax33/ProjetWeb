<?php
/* Smarty version 4.3.0, created on 2023-03-27 15:10:17
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642195b91e7a65_70015937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e46f505a0d4bb6ddd0a5b7d326e72882f5bd17' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\accueil.tpl',
      1 => 1679922616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar_a.tpl' => 1,
    'file:navbar_t.tpl' => 1,
    'file:navbar_s.tpl' => 1,
  ),
),false)) {
function content_642195b91e7a65_70015937 (Smarty_Internal_Template $_smarty_tpl) {
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
      
  <?php echo '</script'; ?>
>
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

    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
