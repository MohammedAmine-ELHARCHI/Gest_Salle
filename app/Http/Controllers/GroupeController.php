<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Filiere;
use App\Models\Annee;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    public function getData(){
        $filiere = Filiere::all();
        $annee = Annee::all();
        return view('groupe',compact('filiere','annee'));
    }

    public function createGroupe(Request $request){

        $result = Groupe::insert([
            'idFiliere' => $request->idFiliere,
            'idAnne'=> $request->idAnne,
            'GroupeNumber'=> $request->GroupeNumber,
            'email_delegue'=> $request->email_delegue
        ]);
       if($result){
        return view('dashboard');
       }else{
        return view('seances');
       }
        
    }
}
