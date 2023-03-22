<?php
/* Smarty version 4.3.0, created on 2023-03-22 09:58:29
  from 'C:\Users\leanb\Documents\GitHub\ProjetWeb\Views\templates\ma_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641ad1452d9b82_62825170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe44b6ae77388e984f2d72e9511ccbb6b45bc2c' => 
    array (
      0 => 'C:\\Users\\leanb\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\ma_template.tpl',
      1 => 1679479106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641ad1452d9b82_62825170 (Smarty_Internal_Template $_smarty_tpl) {
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
        <span>Offres</span> <span>| Entreprises</span>
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
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['object']->value->Entitled_O;?>
</h5>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['object']->value->Duration_O;?>
</p>
                    <p class="card-text"><small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['object']->value->DatePublish_O;?>
</small></p>
                    <div class="button-group">
                      <button class="btn btn-orange">En savoir plus</button>
                      <button class="btn btn-green">Ajouter à la wishlist</button>
                      <button class="btn btn-red">Candidater</button>
                    </div>
                  </div>
                </div>
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
