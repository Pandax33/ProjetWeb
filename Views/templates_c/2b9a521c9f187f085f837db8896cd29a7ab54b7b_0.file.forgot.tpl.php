<?php
/* Smarty version 4.3.0, created on 2023-03-23 17:39:20
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\forgot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c80b8cbc913_96067728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b9a521c9f187f085f837db8896cd29a7ab54b7b' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\forgot.tpl',
      1 => 1679589558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c80b8cbc913_96067728 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Views/css/login.css" type="text/css">
</head>

<body>
    <br><br>
    <div class="container">

            <h1>Problèmes de connexion ?</h1>
            <form method="POST" action="index.php?p=login/forgot2">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
                <button type="submit" class="btn btn-primary" name="validate">Envoyer un mail de récupération</button>
            </form>
            <div class="forgot-password">
                <a href="index.php?p=login">Retour à la page de connexion</a>
            </div>

    </div>
</body>

</html><?php }
}
