<?php
/* Smarty version 4.3.0, created on 2023-03-24 14:20:47
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641da3afd887c4_65220661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e747be3f07f04998023054b9fb770cf793cad61d' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\navbar.tpl',
      1 => 1679664038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641da3afd887c4_65220661 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar">
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
  <?php }
}
