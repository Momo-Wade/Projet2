<?php

namespace App\Http\Controllers;


use App\Models\Projet;
use App\Models\Activite;
use App\Models\Zone;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

  
}
