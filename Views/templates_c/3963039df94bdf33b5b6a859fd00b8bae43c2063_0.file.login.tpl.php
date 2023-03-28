<?php
/* Smarty version 4.3.0, created on 2023-03-28 11:27:00
  from 'C:\Users\leanb\Desktop\ProjetWeb\Views\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422cf042685f8_19887307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3963039df94bdf33b5b6a859fd00b8bae43c2063' => 
    array (
      0 => 'C:\\Users\\leanb\\Desktop\\ProjetWeb\\Views\\templates\\login.tpl',
      1 => 1679961260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422cf042685f8_19887307 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | Connexion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Views/css/login.css" type="text/css">
    <link rel="stylesheet" href="../../Views/css/footer.css">
</head>

<body>
    <br><br>
    <div class="container">
            <h1>Connexion</h1>
            <form method="POST" action="index.php?p=login/redirect">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" class="form-control" placeholder="Entrez votre email" name="email">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
            </form>
            <div class="forgot-password">
                <a href="index.php?p=login/forgot">Mot de passe oublié?</a>
            </div>

    </div>
    
</body>

</html><?php }
}
