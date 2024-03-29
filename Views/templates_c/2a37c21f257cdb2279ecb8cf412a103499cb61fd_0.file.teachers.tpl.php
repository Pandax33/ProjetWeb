<?php
/* Smarty version 4.3.0, created on 2023-03-28 15:41:45
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\teachers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422ee9902ac48_91296260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a37c21f257cdb2279ecb8cf412a103499cb61fd' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\teachers.tpl',
      1 => 1680010902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar_a.tpl' => 1,
    'file:navbar_t.tpl' => 1,
    'file:navbar_s.tpl' => 1,
    'file:buttons/c_teacher_b.tpl' => 1,
    'file:buttons/m_teacher_b.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6422ee9902ac48_91296260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<html>
<head>
  <meta charset="utf-8">
  <title>Héraclès | Pilotes</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeTeachers.css" type="text/css">
  <link rel="stylesheet" href="../../Views/css/navbar.css">
  <link rel="stylesheet" href="../../Views/css/footer.css">

</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?>
  <?php $_smarty_tpl->_subTemplateRender("file:navbar_a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['role']->value == "teacher") {?>
  <?php $_smarty_tpl->_subTemplateRender("file:navbar_t.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['role']->value == "student") {?>
  <?php $_smarty_tpl->_subTemplateRender("file:navbar_s.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
  <div class="container">

    <div class="card card-top">
      <div class="card-body">
        <span class="sel">Pilotes |</span>
      </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?>
      <span><?php $_smarty_tpl->_subTemplateRender("file:buttons/c_teacher_b.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:buttons/m_teacher_b.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></span>
    <?php }?>

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

                      <?php if ($_smarty_tpl->tpl_vars['role']->value == "admin") {?>
                        <a href="index.php?p=teachers/suppr/<?php echo $_smarty_tpl->tpl_vars['object']->value->ID_P;?>
"><button class="btn btn-green" style="background-color:rgb(249, 97, 42)" >Supprimer le pilote</a></button>
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
  
</body>
</html>
<?php }
}
