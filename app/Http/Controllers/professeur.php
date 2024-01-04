<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class professeur extends Controller
{

//     public function getSchedule($id)
// {
//     $schedule = DB::table('seances')
//         ->join('groupes', 'seances.idGroupe', '=', 'groupes.id')
//         ->where('seances.idProf', $id)
//         ->select('seances.*', 'groupes.name as groupName')
//         ->orderBy('seances.jour', 'asc')
//         ->orderBy('seances.heurDebut', 'asc')
//         ->get();

        public function getSchedule($id)
{
    $schedule = DB::table('seances')
        ->join('groupes', 'seances.idGroupe', '=', 'groupes.id')
        ->join('filieres', 'groupes.idFiliere', '=', 'filieres.id')
        ->where('seances.idProf', $id)
        ->select('seances.*', 'groupes.idanne', 'filieres.nomFiliere', 'groupes.GroupeNumber')
        ->orderBy('seances.jour', 'asc')
        ->orderBy('seances.heurDebut', 'asc')
        ->get();

    return view('emploi', ['schedule' => $schedule]);
}

//     return view('dashboard', ['schedule' => $schedule]);
// }
}

