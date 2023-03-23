<?php
/* Smarty version 4.3.0, created on 2023-03-23 12:20:03
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\offers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c35e3088aa0_27183051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79f47da50ed9612abfc870234465ff4a35f3f2b0' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\offers.tpl',
      1 => 1679570326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c35e3088aa0_27183051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Liste des offres</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeOffre.css" type="text/css">
</head>
<body>
  <div class="container">

    <div class="card card-top">
      <div class="card-body">
        <span>Offres |</span> <span><a href="index.php?p=enterprises" >Entreprises</a></span>
      </div>
    </div>

    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['myArray']->value) > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myArray']->value, 'object');
$_smarty_tpl->tpl_vars['object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->do_else = false;
?>
          <li>
            <div class="card mb-3" style="max-width: 900px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="../Views/css/enterprise.png" class="img-fluid rounded-start" alt="illustration d'entreprise">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['object']->value->Entitled_O;?>
 /</h5>
                    <h5 id="enter"> <?php echo $_smarty_tpl->tpl_vars['object']->value->ent;?>
 </h5>
                    <p class="card-text">Durée du stage : <?php echo $_smarty_tpl->tpl_vars['object']->value->Duration_O;?>
</p> 
                    <p class="card-text"><small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['object']->value->DatePublish_O;?>
</small></p>
                    </div>
                    <div class="button-group">
                      <button class="btn btn-orange">En savoir plus</button>
                      <button class="btn btn-green">Ajouter à la Wishlist</button>

                  </div>
                </div>
              </div>
            </div>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      
    <?php } else { ?>
      <p>Aucune donnée trouvée.</p>
    <?php }?>
  </div>
</body>
</html><?php }
}
