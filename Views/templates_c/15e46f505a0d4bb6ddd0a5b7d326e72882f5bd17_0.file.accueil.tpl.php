<?php
/* Smarty version 4.3.0, created on 2023-03-24 10:51:19
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641d72979ca372_01960099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e46f505a0d4bb6ddd0a5b7d326e72882f5bd17' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\accueil.tpl',
      1 => 1679651478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641d72979ca372_01960099 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background-color: gainsboro;
        }
    </style>
</head>

<body>
       <div class="containter"> 
        <?php echo '<?'; ?>
= $contenu <?php echo '?>'; ?>

    </div>
    <h1>Bienvenue <?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</h1>
    <div class="text-center">
        <a href="index.php?p=offers">Annonces</a>
        <a href="index.php?p=enterprises">Enterprises</a>
        <a href="index.php?p=students">Students</a>
        <a href="index.php?p=teachers">Teachers</a>
    </div>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
