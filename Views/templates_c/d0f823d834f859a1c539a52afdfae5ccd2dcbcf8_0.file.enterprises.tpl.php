<?php
/* Smarty version 4.3.0, created on 2023-03-23 12:31:11
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\enterprises.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c387fb082d6_75644519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0f823d834f859a1c539a52afdfae5ccd2dcbcf8' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\enterprises.tpl',
      1 => 1679571070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c387fb082d6_75644519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Liste des Entreprises</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeOffre.css" type="text/css">
</head>
<body>
  <div class="container">

    <div class="card card-top">
      <div class="card-body">
        <span>Entreprises |</span> <span><a href="index.php?p=offers" >Offres</a></span>
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
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['object']->value->Name_E;?>
</h5>
                    <h5 id="enter"> <?php echo $_smarty_tpl->tpl_vars['object']->value->Activity_E;?>
 </h5>
                    <p class="card-text">Nombres d'étudiants en stage : <?php echo $_smarty_tpl->tpl_vars['object']->value->Intership_E;?>
</p> 
                    <p class="card-text"><small class="text-muted">Niveau de confiance : <?php echo $_smarty_tpl->tpl_vars['object']->value->TrustRate_E;?>
 / 5</small></p>
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
