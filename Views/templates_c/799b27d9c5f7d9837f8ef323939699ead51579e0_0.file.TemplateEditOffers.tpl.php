<?php
/* Smarty version 4.3.0, created on 2023-03-28 07:21:29
  from 'C:\Users\leanb\Documents\GitHub\ProjetWeb\Views\templates\TemplateEditOffers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64229579e45e00_08844353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '799b27d9c5f7d9837f8ef323939699ead51579e0' => 
    array (
      0 => 'C:\\Users\\leanb\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\TemplateEditOffers.tpl',
      1 => 1679987775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64229579e45e00_08844353 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
  <meta charset="utf-8">
  <title>Liste des articles</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../Views/css/createOffers.css" type="text/css">
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<form method="POST" action="index.php?p=offers/update" enctype="multipart/form-data">

  

<div class="container">
        <div class="create-off-border">
            <label>Modify Offres</label></div>
            <div class="row mb-3">
<div class="form-group col-md-6">
<label for="Intitule">Intitulé</label>
<select id="Intitule" class="form-control" name="Intitule">


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offers']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
  <option data-ID-O='<?php echo $_smarty_tpl->tpl_vars['item']->value->ID_O;?>
' data-Name_Enterprise='<?php echo $_smarty_tpl->tpl_vars['item']->value->Name_E;?>
' data-duration='<?php echo $_smarty_tpl->tpl_vars['item']->value->Duration_O;?>
' data-salary='<?php echo $_smarty_tpl->tpl_vars['item']->value->Salary_O;?>
' data-description='<?php echo $_smarty_tpl->tpl_vars['item']->value->Description;?>
' data-space='<?php echo $_smarty_tpl->tpl_vars['item']->value->Space_O;?>
' data-state='<?php echo $_smarty_tpl->tpl_vars['item']->value->State;?>
' data-IDE='<?php echo $_smarty_tpl->tpl_vars['item']->value->ID_E;?>
' data-name='<?php echo $_smarty_tpl->tpl_vars['item']->value->Name;?>
' data-competences='<?php echo $_smarty_tpl->tpl_vars['item']->value->Competences;?>
' data-promotions='<?php echo $_smarty_tpl->tpl_vars['item']->value->Promotions;?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value->Entitled_O;?>
</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</select>
</div>

<div class="form-group col-md-6">
    <label for="ID">IDO</label>
    <input type="text" class="form-control" id="IDO" placeholder="IDO" name="IDO" readonly>
  </div>
            </div>
            <div class="row mb-3">
    <div class="form-group col-md-6">
      <label for="Duree">Durée</label>
      <input type="Secteur d'activité" class="form-control" id="Duree" placeholder="Durée" name="Duree">
    </div>

    <div class="form-group col-md-6">
      <label for="Duree">Salaire</label>
      <input type="Secteur d'activité" class="form-control" id="Salaire" placeholder="Salaire" name="Salaire">
    </div>
            </div>
    <div class="form-group col-md-6">
      <label for="inputDescriptiond4">Description</label>
      <input type="text" class="form-control" id="inputDescription4" placeholder="description" name="description">
    </div>

    <div class="form-group col-md-6">
  <label for="inputImage">Image</label>
  <input type="file" class="form-control-file" id="inputImage" name="image">
</div>
  
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputNbStagiaire">Nombre de stagiaire</label>
        <input type="number" class="form-control" id="inputNbStagiaire" name="nbStagiaire" >
      </div>
      
      <div class="form-group col-md-6">
        <label for="Entreprise">Entreprise</label>
        <select id="Entreprise" class="form-control" name="Entreprise">
        <option selected>Choisir...</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['enterprise']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
          <option data-ID="<?php echo $_smarty_tpl->tpl_vars['item']->value->ID_E;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->Name_E;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
      </select>
      </div>

      <div class="form-group col-md-6">
    <label for="ID">IDE</label>
    <input type="text" class="form-control" id="ID" placeholder="ID" name="ID" readonly>
  </div>

      <div class="form-group col-md-6">
        <label for="Lieux">Lieux</label>
        <select id="Lieux" class="form-control" name="Lieux">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['city']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
          <option><?php echo $_smarty_tpl->tpl_vars['item']->value->Name;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
      </select>
      </div>
    </div>
    

  <div class="form-group col-md-6">
        <label for="Competence">Competence</label>
        <select id="Competence" class="form-control" name="competence[]" multiple >
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Request']->value, 'item');
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
        <label for="Promotion">Promotion</label>
        <select id="Promotion" class="form-control" name="Promotion[]" multiple>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Promotion']->value, 'item');
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
      </div>

  
  <div class="form-check">
  <input class="form-check-input" type="radio" name="visible" id="Visible" value="visible">
  <label class="form-check-label" for="Visible">
    Visible
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="visible" id="Invisible" value="invisible" checked>
  <label class="form-check-label" for="Invisible">
    Invisible
  </label>
</div>







    <br></br>
    <button type="submit" name="submitBtn" id="submitBtn" class="btn btn-primary">Sign in</button>

  </form>



</body>
<?php echo '<script'; ?>
 src="../../Views/javascript/TemplateEditOffers.js"><?php echo '</script'; ?>
>
</html><?php }
}
