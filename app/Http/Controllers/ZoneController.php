<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function index (){
        $liste_zones = Zone::all();
        return view("zones.liste_Zone", ["nos_zones" => $liste_zones]);
    }

    public function create ()
    {
        return view("zones.create");
    }
}
