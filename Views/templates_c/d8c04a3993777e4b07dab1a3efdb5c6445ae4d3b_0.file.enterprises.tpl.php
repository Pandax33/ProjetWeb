<?php
/* Smarty version 4.3.0, created on 2023-03-24 16:46:19
  from 'C:\Users\leanb\Documents\GitHub\ProjetWeb\Views\templates\enterprises.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641dd3db241134_45041955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8c04a3993777e4b07dab1a3efdb5c6445ae4d3b' => 
    array (
      0 => 'C:\\Users\\leanb\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\enterprises.tpl',
      1 => 1679676368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641dd3db241134_45041955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\leanb\\Documents\\GitHub\\ProjetWeb\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<html>

<head>
  <meta charset="utf-8">
  <title>Liste des Entreprises</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeEnterprise.css" type="text/css">
  <meta name="description" content="Liste des entreprises proposées avec leurs informations principales telle que leurs adresses, leur nom, leur activité...">
  <meta name="viewport" content="width=device-width">
  </head>

<body>
  <div class="container">

    <div class="card card-top">
      <div class="card-body">
        <span>Entreprises |</span><span><a href="index.php?p=offers">Offres</a></span>
      </div>
    </div>
  </div>

  <div class="container">
        <div class="row">

        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['myArray']->value) > 0) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myArray']->value, 'object');
$_smarty_tpl->tpl_vars['object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->do_else = false;
?>
            <div class="col-lg-4 col-md-6 col-sm-12 ecart">
                <div class="card" style="width: 18rem;">
                  <img src="../Views/css/enterprise.png" class="card-img-top" alt="Image 1">
                  <div class="card-body">
                    <h5 class="card-title truncate-text" ><?php echo $_smarty_tpl->tpl_vars['object']->value->Name_E;?>
</h5>
                    <p class="card-text sector"><?php echo $_smarty_tpl->tpl_vars['object']->value->Activity_E;?>
</p>
                    <p class="card-text texte">Stagiaires embauchés : <?php echo $_smarty_tpl->tpl_vars['object']->value->Intership_E;?>
</p>
                    <p class="card-text texte"><small class="text-muted">Niveau de confiance : <?php echo $_smarty_tpl->tpl_vars['object']->value->TrustRate_E;?>
 / 5</small></p>
                    <button class="btn btn-orange">En savoir plus</button>
  
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
    </div>
 
    </div>
  </section>

</body>

</html><?php }
}
