<?php
/* Smarty version 4.3.0, created on 2023-03-28 11:27:06
  from 'C:\Users\leanb\Desktop\ProjetWeb\Views\templates\navbar_a.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422cf0a698b07_87701305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2183bac7fe42af320a3e7ee81d0d249a86598bb5' => 
    array (
      0 => 'C:\\Users\\leanb\\Desktop\\ProjetWeb\\Views\\templates\\navbar_a.tpl',
      1 => 1679957624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422cf0a698b07_87701305 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar sticky-top bg-body-tertiary">
    <div class="navbar-brand">
      <span>Héraclès </span>
      <span class="divider"> |</span>
    </div>
    <ul class="nav-list" id="navList">
      <li class="nav-item"><a href="index.php?p=accueil" class="nav-link">Accueil</a></li>
      <li class="nav-item"><a href="index.php?p=offers" class="nav-link">Offres</a></li>
      <li class="nav-item"><a href="index.php?p=enterprises" class="nav-link">Entreprises</a></li>
      <li class="nav-item"><a href="index.php?p=students" class="nav-link">Etudiants</a></li>
      <li class="nav-item"><a href="index.php?p=teachers" class="nav-link">Pilotes</a></li>

      
      <li class="nav-item profile-item mobile-only"><a href="#" class="nav-link">Profile</a></li>
      <li class="nav-item sign-item mobile-only"><a href="index.php?p=login" class="nav-link1">Sign Out</a></li>

    </ul>
   
    <div class="profile-section"><a href="#" class="nav-link">Profile</a></div>
    <div class="sign-section"><a href="index.php?p=login" class="nav-link1">Sign Out</a></div>
    <button class="hamburger" id="hamburger">&#9776;</button>
  </nav>
  <?php }
}
