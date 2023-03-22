<?php
/* Smarty version 4.3.0, created on 2023-03-21 13:27:30
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\ma_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6419a2b29ce180_32244133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45323d2061af535f414e9b8b72e18259991ab86d' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\ma_template.tpl',
      1 => 1679401573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419a2b29ce180_32244133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Liste des articles</title>
</head>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['Nom']->value;?>
</h1>

<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['myArray']->value) > 0) {?>
  <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myArray']->value, 'object');
$_smarty_tpl->tpl_vars['object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->do_else = false;
?>
      <li>
        <h2><?php echo $_smarty_tpl->tpl_vars['object']->value->Entitled_O;?>
</h2>
        <p><strong>Duration:</strong> <?php echo $_smarty_tpl->tpl_vars['object']->value->Duration_O;?>
</p>
        <p><strong>Salary:</strong> <?php echo $_smarty_tpl->tpl_vars['object']->value->Salary_O;?>
</p>
        <p><strong>Description:</strong> <?php echo $_smarty_tpl->tpl_vars['object']->value->Description;?>
</p>
        <p><strong>Location:</strong> <?php echo $_smarty_tpl->tpl_vars['object']->value->Name;?>
</p>
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php } else { ?>
  <p>Aucune donnée trouvée.</p>
<?php }?>
</body>
</html><?php }
}
