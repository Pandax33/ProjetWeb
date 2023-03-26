<?php
/* Smarty version 4.3.0, created on 2023-03-26 19:12:33
  from 'C:\Users\Aniss\Documents\GitHub\ProjetWeb\Views\templates\navbar_a.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64207d01555c06_92314697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0122e848b1c401601171c35fd004db9eadf97049' => 
    array (
      0 => 'C:\\Users\\Aniss\\Documents\\GitHub\\ProjetWeb\\Views\\templates\\navbar_a.tpl',
      1 => 1679850750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64207d01555c06_92314697 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar sticky-top bg-body-tertiary">
    <div class="navbar-brand">
      <span>Héraclès </span>
      <span class="divider"> |</span>
    </div>
    <ul class="nav-list" id="navList">
      <li class="nav-item"><a href="index.php?p=accueil" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="index.php?p=offers" class="nav-link">Offres</a></li>
      <li class="nav-item"><a href="index.php?p=enterprises" class="nav-link">Entreprises</a></li>
      <li class="nav-item"><a href="index.php?p=students" class="nav-link">Etudiants</a></li>
      <li class="nav-item"><a href="index.php?p=teachers" class="nav-link">Pilotes</a></li>
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
