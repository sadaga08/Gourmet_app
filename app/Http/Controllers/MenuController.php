<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    // Affiche la liste des plats dans le menu
    public function menu()
    {
        return view('components.menu');
    }

    
}
