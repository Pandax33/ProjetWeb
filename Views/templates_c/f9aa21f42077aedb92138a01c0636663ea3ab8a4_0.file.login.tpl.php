<?php
/* Smarty version 4.3.0, created on 2023-03-28 15:07:18
  from 'C:\Users\leanb\Documents\ProjetWeb-tesr\Views\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642302a6eb8719_34200340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9aa21f42077aedb92138a01c0636663ea3ab8a4' => 
    array (
      0 => 'C:\\Users\\leanb\\Documents\\ProjetWeb-tesr\\Views\\templates\\login.tpl',
      1 => 1680015923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642302a6eb8719_34200340 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="container" style="padding-top: 10px;">
        <a href="index.php?p=main"><img src="../../Views/css/images/logoH.png" alt="logo" style="align-items: center;width:100px;display: block; margin: auto;margin-bottom:15px"></a>
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
