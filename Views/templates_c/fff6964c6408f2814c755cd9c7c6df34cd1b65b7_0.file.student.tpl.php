<?php
/* Smarty version 4.3.0, created on 2023-03-28 02:08:34
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\details\student.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64223002e74937_30170389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fff6964c6408f2814c755cd9c7c6df34cd1b65b7' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\details\\student.tpl',
      1 => 1679962114,
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
function content_64223002e74937_30170389 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../../../Views/css/detail_s.css" type="text/css">
    <link rel="stylesheet" href="../../../Views/css/navbar.css">
    <link rel="stylesheet" href="../../Views/css/footer.css">
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?>
  <?php $_smarty_tpl->_subTemplateRender("file:navbar_a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['role']->value == "teacher") {?>
  <?php $_smarty_tpl->_subTemplateRender("file:navbar_t.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['role']->value == "student") {?>
  <?php $_smarty_tpl->_subTemplateRender("file:navbar_s.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="container" style="padding-bottom: 0; margin-bottom:50px ">
<h1><?php echo $_smarty_tpl->tpl_vars['etudiant']->value->Firstname_P;?>

<span><?php echo $_smarty_tpl->tpl_vars['etudiant']->value->Lastname_P;?>
</span></h1>
    <p>email : <?php echo $_smarty_tpl->tpl_vars['etudiant']->value->mail;?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['pro']->value->Name_Promotion;?>
</p>
    <p style="color: rgb(210, 71, 71);"><a href="index.php?p=wishlist/monitor/<?php echo $_smarty_tpl->tpl_vars['etudiant']->value->ID_P;?>
">Wishlist de l'étudiant.e</a></p>
    
      <p> <a href="index.php?p=students" style="color:black">Retour</a></p>
</div>
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
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
}