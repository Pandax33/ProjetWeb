<?php
/* Smarty version 4.3.0, created on 2023-03-28 20:10:56
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\apply.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64232db0dd5c26_74859384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fb464c536985ee4add41ff943d3bf43fe442922' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\apply.tpl',
      1 => 1680024182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64232db0dd5c26_74859384 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | Candidature envoyée !</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Views/css/login.css" type="text/css">
    <link rel="stylesheet" href="../../Views/css/footer.css">
    <link rel="icon" type="image/x-icon" href="../../Views/css/images/LogoH.png">
</head>

<body>
    <br><br>
    <div class="container">

            <h1>Vous venez de candidater à l'offre:</h1>
                <h3><?php echo $_smarty_tpl->tpl_vars['offer']->value->Entitled_O;?>
</h3>
                <h3><span style="color: rgb(30, 30, 30)">de </span><?php echo $_smarty_tpl->tpl_vars['offer']->value->ent;?>
</h3>
                <p><span style="color: rgb(30, 30, 30)">Votre tuteur sera informé par mail de votre candidature. 📫</span></p>
            <div class="forgot-password">
                <a href="index.php?p=offers">Retour à la page d'offres</a>

            </div>

    </div>
</body>

</html><?php }
}
