<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\projet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projets = projet::all();
        $entreprises = Entreprise::all();
        return view('home.home',['projets'=>$projets,'entreprises'=>$entreprises]);
    }

}
