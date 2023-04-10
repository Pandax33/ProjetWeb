<?php
/* Smarty version 4.3.0, created on 2023-03-28 11:25:52
  from 'C:\Users\leanb\Desktop\ProjetWeb\Views\templates\details\offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422cec03dc694_00076712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ed3013f0b3da73f60e033d4ec79c8ead4cfa9ce' => 
    array (
      0 => 'C:\\Users\\leanb\\Desktop\\ProjetWeb\\Views\\templates\\details\\offre.tpl',
      1 => 1679961522,
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
function content_6422cec03dc694_00076712 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1><?php echo $_smarty_tpl->tpl_vars['offer']->value->Entitled_O;?>
</h1>
    <h3 style="color: rgb(74, 74, 74)"><span>chez </span><?php echo $_smarty_tpl->tpl_vars['offer']->value->ent;?>
</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['offer']->value->Description;?>
</p>
    <!--Parcourir la liste req de l'objet $offer-->
    <p style="color:rgb(36, 36, 36)"> Compétences requises :
    <br>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offer']->value->req, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
      <span style="color: orange;"><?php echo $_smarty_tpl->tpl_vars['r']->value;?>
 /</span>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </p>

    <p style="margin-bottom: 0; color:rgb(37, 37, 37)">Durée du stage : <span style="color:rgba(70, 70, 70, 0.688)"><?php echo $_smarty_tpl->tpl_vars['offer']->value->Duration_O;?>
</span></p>
    <p style="margin-bottom: 0;color:rgb(36, 36, 36)">Gratification: <span style="color:rgba(70, 70, 70, 0.688)"><?php echo $_smarty_tpl->tpl_vars['offer']->value->Salary_O;?>
</span></p>
    <p style="margin-bottom: 0;color:rgb(36, 36, 36)">Lieu du stage: <span style="color:rgba(70, 70, 70, 0.688)"><a href="index.php?p=offers/ville/<?php echo $_smarty_tpl->tpl_vars['offer']->value->Name;?>
"><?php echo $_smarty_tpl->tpl_vars['offer']->value->Name;?>
</a></span></p>
    <p style="color:orange"><?php echo $_smarty_tpl->tpl_vars['offer']->value->Space_O;?>
<span style="color:rgb(36, 36, 36)"> place.s restante.s</span></p>
    <?php if ($_smarty_tpl->tpl_vars['offer']->value->wish == 0 && $_smarty_tpl->tpl_vars['role']->value == "student") {?>
        <a href="index.php?p=offers/addWishlist/<?php echo $_smarty_tpl->tpl_vars['offer']->value->ID_O;?>
"><button class="btn btn-green">Ajouter à la Wishlist</a></button>
        <br>
      <a href="index.php?p=offers/postuler/<?php echo $_smarty_tpl->tpl_vars['offer']->value->ID_O;?>
"><button class="btn btn-post">Postuler</a></button>
      <?php } elseif ($_smarty_tpl->tpl_vars['offer']->value->wish == 1 && $_smarty_tpl->tpl_vars['role']->value == "student") {?>
        <a href="index.php?p=offers/removeWishlist/<?php echo $_smarty_tpl->tpl_vars['offer']->value->ID_O;?>
"><button class="btn btn-red">Retirer de la Wishlist</a></button>
        <br>
      <a href="index.php?p=offers/postuler/<?php echo $_smarty_tpl->tpl_vars['offer']->value->ID_O;?>
"><button class="btn btn-post">Postuler</a></button>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?>
      <a href="index.php?p=offers/suppr/<?php echo $_smarty_tpl->tpl_vars['offer']->value->ID_O;?>
"><button class="btn btn-red">Supprimer l'offre</a></button>
      <?php }?>
      <p> <a href="index.php?p=offers" style="color:black">Retour</a></p>
</div>

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

</html>







<?php }
}
