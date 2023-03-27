<?php
/* Smarty version 4.3.0, created on 2023-03-27 15:46:15
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\details\offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64219e274fd9a7_58241976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19a50924728e130c8d9e61ce93625808a3c81dfd' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\details\\offre.tpl',
      1 => 1679924774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64219e274fd9a7_58241976 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | Connexion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../Views/css/detail_o.css" type="text/css">
</head>

<body>
<h3> Annonce </h3>
<article>
    <h1><?php echo $_smarty_tpl->tpl_vars['offer']->value->Entitled_O;?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['offer']->value->Description;?>
</p>
    <p>Durée du stage : <?php echo $_smarty_tpl->tpl_vars['offer']->value->Duration_O;?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['offer']->value->wish == 0 && $_smarty_tpl->tpl_vars['role']->value == "student") {?>
        <a href="index.php?p=offers/addWishlist/<?php echo $_smarty_tpl->tpl_vars['offer']->value->ID_O;?>
"><button class="btn btn-green">Ajouter à la Wishlist</a></button>
      <?php } elseif ($_smarty_tpl->tpl_vars['offer']->value->wish == 1 && $_smarty_tpl->tpl_vars['role']->value == "student") {?>
        <a href="index.php?p=offers/removeWishlist/<?php echo $_smarty_tpl->tpl_vars['offer']->value->ID_O;?>
"><button class="btn btn-red">Retirer de la Wishlist</a></button>
      <?php }?>
      <br>
      <a href="index.php?p=offers/postuler/<?php echo $_smarty_tpl->tpl_vars['offer']->value->ID_O;?>
"><button class="btn btn-post">Postuler</a></button>
</article>
    </div>
</body>

</html>







<?php }
}
