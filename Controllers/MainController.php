<?php
//PERMET D'ACCEDER A LA PAGE D'ACCUEIL
namespace App\Controllers;

class MainController extends Controller
{
    public function index()
    {
        $this -> render('main/index', [], 'home');
    }
}