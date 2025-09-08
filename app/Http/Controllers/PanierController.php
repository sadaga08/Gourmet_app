<?php

namespace App\Http\Controllers;

class PanierController extends Controller
{
    public function showPanier(){
        return view('components.panier');
    }
}
