<?php
/* Smarty version 4.3.0, created on 2023-03-23 18:31:25
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\enterprises.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c8ceddc06f1_83567897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0f823d834f859a1c539a52afdfae5ccd2dcbcf8' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\enterprises.tpl',
      1 => 1679592685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c8ceddc06f1_83567897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<html>

<head>
  <meta charset="utf-8">
  <title>Liste des Entreprises</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeEnterprise.css" type="text/css">
</head>

<body>
  <div class="container">

    <div class="card card-top">
      <div class="card-body">
        <span>Entreprises | </span><span><a href="index.php?p=offers">Offres</a></span>
      </div>
    </div>
  </div>
  <section>
    <div class="d-flex">
      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['myArray']->value) > 0) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myArray']->value, 'object');
$_smarty_tpl->tpl_vars['object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->do_else = false;
?>

      <div class="card" style="p-2 flex-fill">
        <img src="../Views/css/enterprise.png"   alt="image des entreprises" >
        <div class="card-body">
          <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['object']->value->Name_E;?>
</h5>
          <h5 id="enter"> <?php echo $_smarty_tpl->tpl_vars['object']->value->Activity_E;?>
 </h5>
          <p class="card-text">Nombres d'étudiants en stage : <?php echo $_smarty_tpl->tpl_vars['object']->value->Intership_E;?>
</p>
          <p class="card-text"><small class="text-muted">Niveau de confiance : <?php echo $_smarty_tpl->tpl_vars['object']->value->TrustRate_E;?>
 / 5</small></p>

          <div class="button-group">
            <button class="btn btn-orange">En savoir plus</button>
            <button class="btn btn-green">Ajouter à la Wishlist</button>
          </div>
        </div>
      </div>


      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <?php } else { ?>
      <p>Aucune donnée trouvée.</p>
      <?php }?>
    </div>
  </section>

</body>

</html><?php }
}
