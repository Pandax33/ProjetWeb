<?php
/* Smarty version 4.3.0, created on 2023-03-24 14:38:48
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\offers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641da7e8abdb49_47271467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79f47da50ed9612abfc870234465ff4a35f3f2b0' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\offers.tpl',
      1 => 1679665128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641da7e8abdb49_47271467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Liste des offres</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeOffre.css" type="text/css">
  <link rel="stylesheet" href="../../Views/css/navbar.css">
</head>
<body>
<nav class="navbar">
    <div class="navbar-brand">
      <span>Héraclès</span>
      <span class="divider">|</span>
    </div>
    <ul class="nav-list" id="navList">
      <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Offres</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Entreprises</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Wishlist</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Compare</a></li>
      
      <li class="nav-item profile-item mobile-only"><a href="#" class="nav-link">Profile</a></li>
      <li class="nav-item sign-item mobile-only"><a href="#" class="nav-link1">Sign Out</a></li>
      <li class="nav-item search-item mobile-only"><input type="text" class="search-input" placeholder="Search..."></li>
    </ul>
    <input type="text" class="search-input desktop-only" placeholder="Search...">
    <div class="profile-section"><a href="#" class="nav-link">Profile</a></div>
    <div class="sign-section"><a href="#" class="nav-link1">Sign Out</a></div>
    <button class="hamburger" id="hamburger">&#9776;</button>
  </nav>
  <?php echo '<script'; ?>
 src="./css/navbar.js"><?php echo '</script'; ?>
>

  <div class="container">

    <div class="card card-top">
      <div class="card-body">
        <span>Offres |</span><span><a href="index.php?p=enterprises">Entreprises</a></span>
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
                  <img src="../Views/css/enterprise.png" class="img-fluid rounded-start" alt="illustration d'entreprise">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['object']->value->Entitled_O;?>
 /</h5>
                    <h5 id="enter"> <?php echo $_smarty_tpl->tpl_vars['object']->value->ent;?>
 </h5>
                    <p class="card-text">Durée du stage : <?php echo $_smarty_tpl->tpl_vars['object']->value->Duration_O;?>
</p> 
                    <p class="card-text"><small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['object']->value->DatePublish_O;?>
</small></p>
                    </div>
                    <div class="button-group">
                      <button class="btn btn-orange">En savoir plus</button>
                      <button class="btn btn-green">Ajouter à la Wishlist</button>

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
