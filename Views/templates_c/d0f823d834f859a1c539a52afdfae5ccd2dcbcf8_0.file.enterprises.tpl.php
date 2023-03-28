<?php
/* Smarty version 4.3.0, created on 2023-03-29 00:09:58
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\enterprises.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642365b6d77437_30176534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0f823d834f859a1c539a52afdfae5ccd2dcbcf8' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\enterprises.tpl',
      1 => 1680041398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar_a.tpl' => 1,
    'file:navbar_t.tpl' => 1,
    'file:navbar_s.tpl' => 1,
    'file:buttons/c_enterprise_b.tpl' => 1,
    'file:buttons/m_enterprise_b.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_642365b6d77437_30176534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<html>

<head>
  <meta charset="utf-8">
  <title>Héraclès | Entreprises</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeEnterprise.css" type="text/css">
  <link rel="stylesheet" href="../../Views/css/navbar.css">
  <link rel="stylesheet" href="../../Views/css/footer.css">
  <link rel="icon" type="image/x-icon" href="../../Views/css/images/LogoH.png">
  <meta name="description" content="Liste des entreprises proposées avec leurs informations principales telle que leurs adresses, leur nom, leur activité...">
  <meta name="viewport" content="width=device-width">
  </head>

<body>
<?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?>
  <?php $_smarty_tpl->_subTemplateRender("file:navbar_a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['role']->value == "teacher") {?>
  <?php $_smarty_tpl->_subTemplateRender("file:navbar_t.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['role']->value == "student") {?>
  <?php $_smarty_tpl->_subTemplateRender("file:navbar_s.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

  <div class="container" style="min-height:90%">

    <div class="card card-top">
      <div class="card-body">
        <span class="sel">Entreprises |</span><span class="sel"><a href="index.php?p=offers">Offres</a></span>
      </div>
    </div>

    <div class="search-container">
  <form id="search-form" style="margin-bottom: 10px;">
    <input type="text" id="search-input" placeholder="Rechercher une entreprise..." style="width: 150%;">
    <button type="submit" class="btn btn-search" style="margin-left: 10px; margin-right:10px">Rechercher</button>
  </form>
  <div class="filter-container" style="margin-bottom: 2%;">
    <label for="filter">Filtrer par :</label>
    <select id="filter" class="menu">
      <option value="all">Tous</option>
      <?php $_smarty_tpl->_assignInScope('uniqueCities', array());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myArray']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php if (!in_array($_smarty_tpl->tpl_vars['item']->value->Activity_E,$_smarty_tpl->tpl_vars['uniqueCities']->value)) {?>
        <option><?php echo $_smarty_tpl->tpl_vars['item']->value->Activity_E;?>
</option>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['uniqueCities']) ? $_smarty_tpl->tpl_vars['uniqueCities']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['item']->value->Activity_E;
$_smarty_tpl->_assignInScope('uniqueCities', $_tmp_array);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </select>
  </div>
</div>
    <?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?>
      <span><?php $_smarty_tpl->_subTemplateRender("file:buttons/c_enterprise_b.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:buttons/m_enterprise_b.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></span>
    <?php }?>
  
        <div class="row">
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['myArray']->value) > 0) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myArray']->value, 'object');
$_smarty_tpl->tpl_vars['object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->do_else = false;
?>
            <div class="col-lg-4 col-md-6 col-sm-12 ecart">
                <div class="card" style="width: 18rem;background-color:rgba(255, 255, 255, 0.606)">
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
                    <a href="index.php?p=enterprises/detail/<?php echo $_smarty_tpl->tpl_vars['object']->value->ID_E;?>
" class="btn btn-orange">En savoir plus</a>
  
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
 
    </div>
  </section>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '<script'; ?>
>document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('hamburger');
    const navList = document.getElementById('navList');
  
    hamburger.addEventListener('click', () => {
      navList.classList.toggle('nav-list-active');
    });
  });
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src='../../Views/javascript/enterprise.js'><?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
