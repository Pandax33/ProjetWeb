<?php
/* Smarty version 4.3.0, created on 2023-03-28 16:06:25
  from 'C:\Users\leanb\Documents\ProjetWeb-tesr\Views\templates\TemplateEditStudent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642310817ddaa0_75702731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99ff59d39ee75024338ffc2d937ef78042524735' => 
    array (
      0 => 'C:\\Users\\leanb\\Documents\\ProjetWeb-tesr\\Views\\templates\\TemplateEditStudent.tpl',
      1 => 1680015923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642310817ddaa0_75702731 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
  <meta charset="utf-8">
  <title>Héraclès | Modification Etudiant</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../Views/css/createOffers.css" type="text/css">
  <link rel="stylesheet" href="../../Views/css/footer.css">
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<form method="POST" action="index.php?p=students/update" enctype="multipart/form-data">

  

    <div class="container">
        <div class="create-off-border">
            <label>Modification Étudiant</label></div>
            <div class="row mb-3">
<div class="form-group col-md-6">
<label for="Etudiant">Etudiant</label>
<select id="Etudiant" class="form-control" name="Etudiant">


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['students']->value, 'student');
$_smarty_tpl->tpl_vars['student']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->do_else = false;
?>
    <option data-id-p="<?php echo $_smarty_tpl->tpl_vars['student']->value->ID_P;?>
"
    data-firstname="<?php echo $_smarty_tpl->tpl_vars['student']->value->Firstname_P;?>
"
    data-lastname="<?php echo $_smarty_tpl->tpl_vars['student']->value->Lastname_P;?>
"
    data-role="<?php echo $_smarty_tpl->tpl_vars['student']->value->Role_P;?>
"
    data-mail="<?php echo $_smarty_tpl->tpl_vars['student']->value->mail;?>
"
    data-password="<?php echo $_smarty_tpl->tpl_vars['student']->value->password;?>
"
    data-name-center="<?php echo $_smarty_tpl->tpl_vars['student']->value->Name_Center;?>
"
    data-linkpicture="<?php echo $_smarty_tpl->tpl_vars['student']->value->LinkPicture;?>
"
    data-promotions="<?php echo $_smarty_tpl->tpl_vars['student']->value->Promotions;?>
"
    data-competences="<?php echo $_smarty_tpl->tpl_vars['student']->value->Competences;?>
">
<?php echo $_smarty_tpl->tpl_vars['student']->value->Firstname_P;?>
 <?php echo $_smarty_tpl->tpl_vars['student']->value->Lastname_P;?>

</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</select>
</div>

<div class="form-group col-md-6">
    <label for="ID">ID</label>
    <input type="text" class="form-control" id="ID" placeholder="ID" name="ID" readonly>
  </div></div>
  <div class="row mb-3">
    <div class="form-group col-md-6">
      <label for="Prenom">Prenom</label>
      <input type="Secteur d'activité" class="form-control" id="Prenom" placeholder="Durée" name="Prenom">
    </div>

    <div class="form-group col-md-6">
      <label for="Nom">Nom</label>
      <input type="Secteur d'activité" class="form-control" id="Nom" placeholder="Nom" name="Nom">
    </div></div>

    <div class="form-group col-md-12">
      <label for="Mail">Mail</label>
      <input type="Mail" class="form-control" id="Mail" placeholder="Mail" name="Mail">
    </div>

    
  
    
<div class="row mb-3">
      <div class="form-group col-md-6">
        <label for="Centre">Centre</label>
        <select id="Centre" class="form-control" name="Centre">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['center']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
          <option ><?php echo $_smarty_tpl->tpl_vars['item']->value->Name_Center;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
      </select>
      </div>
      <div class="form-group col-md-6">
        <label for="Promotion">Promotion</label>
        <select id="Promotion" class="form-control" name="Promotion">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotion']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
          <option ><?php echo $_smarty_tpl->tpl_vars['item']->value->Name_Promotion;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
      </select>
      </div></div>

      <div class="form-group col-md-12">
        <label for="Competence">Competence</label>
        <select id="Competence" class="form-control" name="competence[]" multiple >
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competence']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
          <option><?php echo $_smarty_tpl->tpl_vars['item']->value->Name_Competence;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
      </select>
      </div>
      <div class="form-group col-md-6">
        <label for="inputImage">Image</label>
        <input type="file" class="form-control-file" id="inputImage" name="image">
      </div>

      

    
  









    <br></br>
    <button type="submit" name="submitBtn" id="submitBtn" class="btn btn-primary">Modify</button>

  </form>



</body>
<?php echo '<script'; ?>
 src="../../Views/javascript/TemplateEditstudent.js"><?php echo '</script'; ?>
>
</html><?php }
}
