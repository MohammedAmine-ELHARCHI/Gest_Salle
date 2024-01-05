<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\GroupeEncadreController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\professeur;
use App\Models\Seance; // Assurez-vous d'importer le modèle approprié pour la table 'seances'
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('admin:admin')->group(function(){
    Route::get('admin/login',[AdminController::class,'loginForm']);
    Route::post('admin/login',[AdminController::class,'store'])->name('admin.login');
});

Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboardAdmin');
    })->name('dashboard')->middleware('auth:admin');

    Route::get('admin/seances',[SeanceController::class,'getUsers'])->name('seances')->middleware('auth:admin');
    Route::post('admin/seances',[SeanceController::class,'createSeance'])->name('storeSeance')->middleware('auth:admin');
    Route::get('admin/groupe',[GroupeController::class,'getData'])->name('groupe')->middleware('auth:admin');
    Route::post('admin/groupe',[GroupeController::class,'createGroupe'])->name('storeGroupe')->middleware('auth:admin');
    Route::get('admin/professeur',function(){
        return view('professeur');
    })->name('professeur')->middleware('auth:admin');
    Route::get('admin/groupeEnc',[GroupeEncadreController::class,'getData'])->name('groupeEncadre')->middleware('auth:admin');
    Route::post('admin/groupeEnc',[GroupeEncadreController::class,'createGroupeEncadre'])->name('storeGroupeEnc')->middleware('auth:admin');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/salleDispo/{idgroupe}',function(Request $request){

        $idGroupe = $request->idgroupe;
        $user = Auth::user();
        $id = $user->id;
        $seances = Seance::where('reserved', 0)
            ->whereNotIn('id', function ($query) use ($idGroupe, $id) {
                $query->select('id')
                    ->from('seances')
                    ->where('idGroupe', $idGroupe)
                    ->orWhere('idProf', $id);
            })
            ->get();
        //return response()->json(["msg"=>$seances]);
        return view('salles_dispo',compact('seances'));
    })->name('salleDispo');


    Route::get('/groupe-Encadre',[GroupeEncadreController::class,"getGroupe"])->name('groupe_Encadre');
    Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
    Route::get('generateEmploi-pdf', [PDFController::class, 'generateEmploie'])->name('generateEmploi-pdf');
    Route::get('/teacher-schedule/{id}', [professeur::class, 'getSchedule'])->name('teacher-schedule');
});