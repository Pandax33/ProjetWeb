<?php
/* Smarty version 4.3.0, created on 2023-03-28 16:04:59
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\navbar_s.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422f40b60c592_26585622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4514aa911a82d1d27778a1d90f40d4ce081b7a36' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\navbar_s.tpl',
      1 => 1680002065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422f40b60c592_26585622 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar sticky-top bg-body-tertiary">
    <div class="navbar-brand">
      <span>Héraclès </span>
      <span class="divider"> |</span>
    </div>
    <ul class="nav-list" id="navList">
      <li class="nav-item"><a href="index.php?p=accueil" class="nav-link">Accueil</a></li>
      <li class="nav-item"><a href="index.php?p=offers" class="nav-link">Offres</a></li>
      <li class="nav-item"><a href="index.php?p=enterprises" class="nav-link">Entreprises</a></li>
      <li class="nav-item"><a href="index.php?p=wishlist" class="nav-link">Wishlist</a></li>

      
      <li class="nav-item profile-item mobile-only"><a href="#" class="nav-link">Profile</a></li>
      <li class="nav-item sign-item mobile-only"><a href="index.php?p=main" class="nav-link1">Sign Out</a></li>
    </ul>
    <div class="profile-section"><a href="#" class="nav-link">Profile</a></div>
    <div class="sign-section"><a href="index.php?p=login" class="nav-link1">Sign Out</a></div>
    <button class="hamburger" id="hamburger">&#9776;</button>
  </nav>
  <?php }
}
