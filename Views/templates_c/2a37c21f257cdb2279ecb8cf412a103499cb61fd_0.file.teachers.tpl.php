<?php
/* Smarty version 4.3.0, created on 2023-03-24 12:08:23
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\teachers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641d84a75d3bf2_00012264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a37c21f257cdb2279ecb8cf412a103499cb61fd' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\teachers.tpl',
      1 => 1679656102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641d84a75d3bf2_00012264 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Liste des pilotes</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeTeachers.css" type="text/css">
</head>
<body>
  <div class="container">

    <div class="card card-top">
      <div class="card-body">
        <span>Pilotes |</span>
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
                  <img src="../Views/css/pp.png" class="img-fluid rounded-start" alt="illustration d'entreprise">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['object']->value->Firstname_P;?>
 <?php echo $_smarty_tpl->tpl_vars['object']->value->Lastname_P;?>
</h5>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['object']->value->mail;?>
</p> 
                    <p class="card-text"><small class="text-muted">Centre : <?php echo $_smarty_tpl->tpl_vars['object']->value->Name_Center;?>
</small></p>
                    </div>
                    <div class="button-group">
                      <button class="btn btn-green">Modifier</button>

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
