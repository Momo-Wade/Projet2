<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    public function index (){
        $liste_activites = Activite::all();
        return view("activites.liste_Acti", ["nos_activites" => $liste_activites]);
    }

    public function create ()
    {
        return view("activites.create");
    }
}
