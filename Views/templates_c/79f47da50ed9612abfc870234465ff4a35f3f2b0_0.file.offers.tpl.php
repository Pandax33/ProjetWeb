<?php
/* Smarty version 4.3.0, created on 2023-03-28 19:31:33
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\offers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64232475e1f0d3_97083384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79f47da50ed9612abfc870234465ff4a35f3f2b0' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\offers.tpl',
      1 => 1680024668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar_a.tpl' => 1,
    'file:navbar_t.tpl' => 1,
    'file:navbar_s.tpl' => 1,
    'file:buttons/c_offer_b.tpl' => 1,
    'file:buttons/m_offer_b.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64232475e1f0d3_97083384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Héraclès | Offres</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeOffre.css" type="text/css">
  <link rel="stylesheet" href="../../Views/css/navbar.css">
  <link rel="stylesheet" href="../../Views/css/footer.css">
  <link rel="icon" type="image/x-icon" href="../../Views/css/images/LogoH.png">
</head>
<body>


<!--Si le role dans la session = admin, alors inclure navbar_s.tpl, de meme pour les roles teacher et student-->
  <?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:navbar_a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } elseif ($_smarty_tpl->tpl_vars['role']->value == "teacher") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:navbar_t.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } elseif ($_smarty_tpl->tpl_vars['role']->value == "student") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:navbar_s.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>

  <div class="container"style="min-height:90%"> 

    <div class="card card-top">
      <div class="card-body">
        <span class="sel">Offres |</span><span class="sel"><a href="index.php?p=enterprises">Entreprises</a></span>
      </div>

      
    </div>

    <div class="search-container">
  <form id="search-form">
    <input type="text" id="search-input" placeholder="Rechercher une offre..." style="width: 150%;">
    <button type="submit" class="btn btn-search" style="margin-left: 10px; margin-right:10px">Rechercher</button>
  </form>
  <div class="filter-container">
    <label for="filter">Filtrer:</label>
    <select id="filter">
      <option value="all">Tous</option>
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
     <!--Si le role est admin, inclure le fichier createoffer.tpl-->
    <?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?>
      <span><?php $_smarty_tpl->_subTemplateRender("file:buttons/c_offer_b.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      
      <?php $_smarty_tpl->_subTemplateRender("file:buttons/m_offer_b.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></span>
    <?php }?>

    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['myArray']->value) > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myArray']->value, 'object');
$_smarty_tpl->tpl_vars['object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->do_else = false;
?>
          

          <li style="width: 70%; ">
            <div class="card mb-3" style="max-width: 900px;background-color:rgba(255, 255, 255, 0.625)">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="../Views/css/enterprise.png" class="img-fluid rounded-start" alt="illustration d'entreprise">
                </div>
                <div class="col-md-8">
                  <div class="card-body">

                  <?php if ($_smarty_tpl->tpl_vars['object']->value->State == 1) {?>
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['object']->value->Entitled_O;?>
 /</h5>
                  <?php } else { ?>
                    <h5 class="card-title">❌<?php echo $_smarty_tpl->tpl_vars['object']->value->Entitled_O;?>
 /</h5>
                  <?php }?>
          
                    <h5 id="enter"><a href="index.php?p=offers/list/<?php echo $_smarty_tpl->tpl_vars['object']->value->ID_E;?>
"><?php echo $_smarty_tpl->tpl_vars['object']->value->ent;?>
 </a><span> à <a href="index.php?p=offers/ville/<?php echo $_smarty_tpl->tpl_vars['object']->value->Name;?>
"><?php echo $_smarty_tpl->tpl_vars['object']->value->Name;?>
 </a></span></h5>

                    <p class="card-text">Durée du stage : <?php echo $_smarty_tpl->tpl_vars['object']->value->Duration_O;?>
</p> 
                    <p class="card-text"><small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['object']->value->DatePublish_O;?>
</small></p>
                    </div>
                    <div class="button-group">
                    <a href="index.php?p=offers/detail/<?php echo $_smarty_tpl->tpl_vars['object']->value->ID_O;?>
" class="btn btn-orange" style="margin-right: 10px;">En savoir plus</a>
                    <?php if ($_smarty_tpl->tpl_vars['object']->value->wish == 0 && $_smarty_tpl->tpl_vars['role']->value == "student") {?>
                      <a href="index.php?p=offers/addWishlist/<?php echo $_smarty_tpl->tpl_vars['object']->value->ID_O;?>
"><button class="btn btn-green">Ajouter à la Wishlist</a></button>
                    <?php } elseif ($_smarty_tpl->tpl_vars['object']->value->wish == 1 && $_smarty_tpl->tpl_vars['role']->value == "student") {?>
                      <a href="index.php?p=offers/removeWishlist/<?php echo $_smarty_tpl->tpl_vars['object']->value->ID_O;?>
"><button class="btn btn-red">Retirer de la Wishlist</a></button>
                    <?php }?>

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
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src='../../Views/javascript/offers.js'><?php echo '</script'; ?>
>
</body>
</html><?php }
}
