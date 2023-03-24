<?php
/* Smarty version 4.3.0, created on 2023-03-22 12:49:34
  from 'C:\Users\leanb\Documents\GitHub\ProjetWeb\Views\templates\TemplateEntreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641af95e4c0aa8_40778798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3e97e8e7e48841734ad2e63f6198f89a7461362' => 
    array (
      0 => 'C:\\Users\\leanb\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\TemplateEntreprise.tpl',
      1 => 1679489367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641af95e4c0aa8_40778798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\leanb\\Documents\\GitHub\\ProjetWeb\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Liste des articles</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeOffre.css" type="text/css">
</head>
<body>
  <div class="container">
    <div class="card card-top">
      <div class="card-body">
        <span>Offres</span> <span>| Entreprises</span> <span><a href="index.php?p=enterprises/modifier">Oui</a></span>
      </div>
    </div>

    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['myArray']->value) > 0) {?>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myArray']->value, 'object');
$_smarty_tpl->tpl_vars['object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->do_else = false;
?>
          <li>
                <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['object']->value->Name_E;?>
</h5>
            <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['object']->value->Activity_E;?>
</h4>
            <h2 class="card-title"><?php echo $_smarty_tpl->tpl_vars['object']->value->Intership_E;?>
</h4>
            <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
        </div>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php } else { ?>
      <p>Aucune donnée trouvée.</p>
    <?php }?>
  </div>
</body>
</html><?php }
}
