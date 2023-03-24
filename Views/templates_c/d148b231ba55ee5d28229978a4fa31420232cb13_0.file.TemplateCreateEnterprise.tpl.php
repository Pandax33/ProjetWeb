<?php
/* Smarty version 4.3.0, created on 2023-03-24 14:04:00
  from 'C:\Users\leanb\Documents\GitHub\ProjetWeb\Views\templates\TemplateCreateEnterprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641dadd09e8657_84974742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd148b231ba55ee5d28229978a4fa31420232cb13' => 
    array (
      0 => 'C:\\Users\\leanb\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\TemplateCreateEnterprise.tpl',
      1 => 1679666622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641dadd09e8657_84974742 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
  <meta charset="utf-8">
  <title>Liste des articles</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../Views/css/TemplateEditEnterprise.css" type="text/css">
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<form method="POST" action="index.php?p=enterprises/create" enctype="multipart/form-data">

  

    
    <div class="form-group col-md-6">
      <label for="Nom">Nom</label>
      <input type="text" class="form-control" id="Nom" placeholder="Nom" name="Nom">
    </div>

    <div class="form-group col-md-6">
      <label for="inputSecteurActivite4">Secteur d'activité</label>
      <input type="Secteur d'activité" class="form-control" id="inputSecteur d'activité4" placeholder="Secteur d'activité" name="activite">
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
        <label for="inputLocalite">Localite</label>
        <select id="inputLocalite" class="form-control" name="citys[]" multiple >
        
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
  
     <fieldset class="rating">
    <legend>Notez cet article :</legend>
    <input type="radio" id="star5" name="rating" value="5"><label for="star5">☆</label>
    <input type="radio" id="star4" name="rating" value="4"><label for="star4">☆</label>
    <input type="radio" id="star3" name="rating" value="3"><label for="star3">☆</label>
    <input type="radio" id="star2" name="rating" value="2"><label for="star2">☆</label>
    <input type="radio" id="star1" name="rating" value="1"><label for="star1">☆</label>
  </fieldset>
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



<?php echo '<script'; ?>
 src = "../../Views/javascript/TemplateCreateEnterprise.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>$(document).ready(function () {
    $('#inputLocalite').select2();
    
});<?php echo '</script'; ?>
>
</body>
</html><?php }
}
