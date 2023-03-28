<?php
/* Smarty version 4.3.0, created on 2023-03-28 09:52:54
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\TemplateCreateOffers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64229cd6800886_36156178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e03e9d407bf815a35f89fc4740756b9ca420994' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\TemplateCreateOffers.tpl',
      1 => 1679989974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64229cd6800886_36156178 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
  <meta charset="utf-8">
  <title>Héraclès | Création Offre</title>
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


<form method="POST" action="index.php?p=offers/create" enctype="multipart/form-data">

  
    <div class="container">
    <div class="create-off-border">
        <label>Création Offre</label></div>
        <div class="row mb-3">

    <div class="form-group col-md-6">
      <label for="Intitule">Intitulé</label>
      <input type="text" class="form-control" id="Intitule" placeholder="Intitule" name="Intitule">
    </div>

    <div class="form-group col-md-6">
        <label for="ID">IDE</label>
        <input type="text" class="form-control" id="ID" placeholder="ID" name="ID" readonly>
      </div></div>
      <div class="row mb-3">
    <div class="form-group col-md-6">
      <label for="Duree">Durée</label>
      <input type="Secteur d'activité" class="form-control" id="Duree" placeholder="Durée" name="Duree">
    </div>

    <div class="form-group col-md-6">
      <label for="Duree">Salaire</label>
      <input type="Secteur d'activité" class="form-control" id="Salaire" placeholder="Salaire" name="Salaire">
    </div></div>

    <div class="form-group col-md-12">

      <label for="inputDescriptiond4">Description</label>
      <input type="text" class="form-control" id="inputDescription4" placeholder="description" name="description">
    </div>


    <div class="row mb-3">
        <div class="form-group col-md-6">
          <label for="inputNbStagiaire">Nombre de stagiaire</label>
          <input type="number" class="form-control" id="inputNbStagiaire" name="nbStagiaire" >
        </div>


    <div class="form-group col-md-6">
  <label for="inputImage">Image</label>
  <input type="file" class="form-control-file" id="inputImage" name="image">
</div>

  </div>
   
  <div class="row mb-3">
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

      </div></div>
      <div class="row mb-3">
      <div class="form-group col-md-6">
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
        <label for="Promotion">Promotion</label>
        <select id="Promotion" class="form-control" name="Promotion[]" multiple>
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

    <button type="submit" name="submitBtn" id="submitBtn" class="btn btn_primary">Create</button>


  </form>



</body>

<?php echo '<script'; ?>
 src="../../Views/javascript/TemplateCreateOffers.js"><?php echo '</script'; ?>
>

</html><?php }
}
