<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ZoneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('liste-projets', [ProjetController::class, 'index' ]);
Route::get('create-projet', [ProjetController::class, 'create' ]);
Route::get('/update_projet/{id}', [ProjetController::class, 'update_projet' ]);
Route::get('/delete_projet/{id}', [ProjetController::class, 'delete_projet' ]);
Route::post('/ajouter/traitement', [ProjetController::class, 'ajouter_projet_traitement' ]);
Route::post('/update/traitement', [ProjetController::class, 'update_projet_traitement' ]);

Route::get('liste-activites', [ActiviteController::class, 'index' ]);
Route::get('create-activite', [ActiviteController::class, 'create' ]);

Route::get('liste-zones', [ZoneController::class, 'index' ]);
Route::get('create-zone', [ZoneController::class, 'create' ]);
