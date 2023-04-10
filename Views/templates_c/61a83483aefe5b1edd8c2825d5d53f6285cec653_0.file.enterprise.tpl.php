<?php
/* Smarty version 4.3.0, created on 2023-03-28 14:23:20
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\details\enterprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422dc38c1e070_47473334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61a83483aefe5b1edd8c2825d5d53f6285cec653' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\details\\enterprise.tpl',
      1 => 1680006197,
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
function content_6422dc38c1e070_47473334 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | <?php echo $_smarty_tpl->tpl_vars['entreprise']->value->Name_E;?>
</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../../../Views/css/detail_o.css" type="text/css">
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

<div class="container" style="padding-bottom: 0; margin-bottom:50px">
    <img src="<?php echo $_smarty_tpl->tpl_vars['entreprise']->value->LinkPicture;?>
" alt="Logo de l'entreprise" style="width: 70%; height: 70%; object-fit: cover; margin-bottom: 50px">
    <h1><?php echo $_smarty_tpl->tpl_vars['entreprise']->value->Name_E;?>
</h1>
    <h3 style="color: rgb(74, 74, 74)"><span> </span><?php echo $_smarty_tpl->tpl_vars['entreprise']->value->Activity_E;?>
</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['entreprise']->value->Description_E;?>
</p>
    

    <!--Parcourir la liste req de l'objet $offer-->
    <p style="color:rgb(36, 36, 36)"> Localités :
    <br>
    <!-- verife si l'array $entreprise->loc existe-->
    <?php if ((isset($_smarty_tpl->tpl_vars['entreprise']->value->loc))) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entreprise']->value->loc, 'localite');
$_smarty_tpl->tpl_vars['localite']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['localite']->value) {
$_smarty_tpl->tpl_vars['localite']->do_else = false;
?>
      <span style="color:rgba(70, 70, 70, 0.688)"><a href="index.php?p=offers/ville/<?php echo $_smarty_tpl->tpl_vars['localite']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['localite']->value;?>
</a></span>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
      <span style="color:rgba(70, 70, 70, 0.688)">Aucune localité</span>
    <?php }?>
    </p>

    <p style="margin-bottom: 0; color:rgb(37, 37, 37)">Etudiants déjà en stage chez <?php echo $_smarty_tpl->tpl_vars['entreprise']->value->Name_E;?>
 : <span style="color:rgba(70, 70, 70, 0.688)"><?php echo $_smarty_tpl->tpl_vars['entreprise']->value->Intership_E;?>
</span></p>
    <p style="color:rgb(36, 36, 36)">Niveau de confiance: <span style="color:rgba(70, 70, 70, 0.555)"> <?php echo $_smarty_tpl->tpl_vars['entreprise']->value->TrustRate_E;?>
 / 5</span></p>
    <?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?>
      <a href="index.php?p=enterprises/suppr/<?php echo $_smarty_tpl->tpl_vars['entreprise']->value->ID_E;?>
"><button class="btn btn-red">Supprimer l'entreprise</a></button>
      <?php }?>
      <p> <a href="index.php?p=enterprises" style="color:black">Retour</a></p>
</div>

<p style="text-align: center;"><a href="index.php?p=offers/list/<?php echo $_smarty_tpl->tpl_vars['entreprise']->value->ID_E;?>
" >Consultez les offres de <?php echo $_smarty_tpl->tpl_vars['entreprise']->value->Name_E;?>
</a></p>
    <a href="index.php?p=offers/list/<?php echo $_smarty_tpl->tpl_vars['entreprise']->value->ID_E;?>
" class="back-b">Aller aux offres</a>
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

</html>







<?php }
}
