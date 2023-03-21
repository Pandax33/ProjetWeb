<?php
/* Smarty version 4.3.0, created on 2023-03-21 09:25:00
  from 'C:\Users\leanb\Documents\GitHub\ProjetWeb\Views\templates\ma_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641977ece126b2_96443763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe44b6ae77388e984f2d72e9511ccbb6b45bc2c' => 
    array (
      0 => 'C:\\Users\\leanb\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\ma_template.tpl',
      1 => 1679390140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641977ece126b2_96443763 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Liste des articles</title>
</head>
<body>
  <h1>Liste des articles</h1>
  <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
      <li><a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['titre'];?>
</a></li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</body>
</html><?php }
}
