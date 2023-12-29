<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Groupe;
use App\Models\Salle;



class SeanceController extends Controller
{

    public function getEmploiProf(Request $request){
        $id = $request->id; 

        $seances = Seance::all()->where('idProf',$id)->get();

        return $seances;
    }

    
    public function getUsers(){
        $users = User::all();
        $groupes = Groupe::all();
        $salles = Salle::all();
        return view('seances',compact('users','groupes','salles'));
    }

    public function createSeance(Request $request){


        $result = Seance::insert([
            'idGroupe' => $request->idGroupe,
            'idSalle'=> $request->idSalle,
            'idProf'=> $request->idProf,
            'heurFin'=> $request->heurFin,
            'heurDebut'=> $request->heurDebut,
            'jour'=> $request->jour,
            
        ]);
       if($result){
        return view('dashboard');
       }else{
        return view('seances');
       }
        
    }
}
