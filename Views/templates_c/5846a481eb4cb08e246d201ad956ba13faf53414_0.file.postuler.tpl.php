<?php
/* Smarty version 4.3.0, created on 2023-03-28 20:10:55
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\postuler.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64232daf8d3177_53788216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5846a481eb4cb08e246d201ad956ba13faf53414' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\postuler.tpl',
      1 => 1680024323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64232daf8d3177_53788216 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | Candidater</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Views/css/postuler.css" type="text/css">
    <link rel="stylesheet" href="../../Views/css/footer.css">
    <link rel="icon" type="image/x-icon" href="../../Views/css/images/LogoH.png">
</head>

<body>
    <br><br>
    <div class="container">
        <form action="index.php?p=offers/apply/<?php echo $_smarty_tpl->tpl_vars['offer']->value->ID_O;?>
" method="POST">
            <h1>À deux clics du stage parfait 😊</h1>
                <h5 style="text-align: center;">Déposez un CV et une lettre de motivation pour candidater à l'offre:</h5>
                <p><?php echo $_smarty_tpl->tpl_vars['offer']->value->Entitled_O;?>

                <div class="button-group" style="text-align:center ;">

                <button class="btn btn-red"><input type="file" accept="image/*,.pdf"/></button>
                
                <button class="btn btn-orange"><input type="file" accept="image/*,.pdf"/></button>
                </div>
                <button type="submit" class="btn btn-primary" >Candidater !</button>
            </form>
            <div class="forgot-password">
                <a href="index.php?p=offers/detail/<?php echo $_smarty_tpl->tpl_vars['offer']->value->ID_O;?>
">Je préfère postuler plus tard</a>
            </div>

    </div>
</body>

</html><?php }
}
