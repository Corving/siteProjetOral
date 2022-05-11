<?php

namespace App\Http\Controllers;

use App\Models\projet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projets = projet::all();
        return view('home.home',['projets'=>$projets]);
    }

}
