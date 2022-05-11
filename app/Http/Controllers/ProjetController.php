<?php

namespace App\Http\Controllers;

use App\Models\projet;
use App\Http\Requests\StoreprojetRequest;
use App\Http\Requests\UpdateprojetRequest;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $projets = projet::all();
        return view('projets.projets',['projets'=>$projets]);
    }

}
