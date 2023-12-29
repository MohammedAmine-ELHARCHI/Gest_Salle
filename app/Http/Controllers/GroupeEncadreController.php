<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Groupe;
use App\Models\groupeEncadre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class GroupeEncadreController extends Controller
{
    public function getData(){
        $users = User::all();
        $groupes = Groupe::all();
        
        return view('groupeEnc',compact('users','groupes'));
    }

    public function createGroupeEncadre(Request $request){


        $result = groupeEncadre::insert([
            'idGroup' => $request->idGroupe,
            'idProf'=> $request->idProf,        
        ]);
       if($result){
        return view('dashboard');
       }else{
        return view('seances');
       }
        
    }

    public function getGroupe(){

         $user = Auth::user();
        $id = $user->id;
        $groupe = groupeEncadre::where('idProf', $id)->get();
        $result =[];
        foreach($groupe as $item){
            $gr = DB::table('groupes')
            ->join('filieres', 'groupes.idFiliere', '=', 'filieres.id')
            ->join('annees', 'groupes.idAnne', '=', 'annees.id')
            ->join('groupe_encadres', 'groupes.id', '=', 'groupe_encadres.idGroup')
            ->where('groupes.id',$item->id)
            ->select('groupes.id','groupes.GroupeNumber', 'filieres.nomFiliere', 'annees.niveau','groupes.email_delegue')
            ->first();
            if($gr !== null){
                array_push($result,$gr);
            }
            
        }
//return response()->json(['msg'=>$result]);
return view('groupeEncadre',compact('user','result'));
    }
    
    public function getSeances(Request $request){
        $seances = Seance::where('reserved', 0)
            ->whereNotIn('id', function ($query) {
                $query->select('id')
                    ->from('seances')
                    ->where('idGroupe', 1)
                    ->orWhere('idProf', 1);
            })
            ->get();
        return view('salles_dispo',compact('seances'));
    }

    function getSalles(Request $request){

        $idGroupe = $request->id;
        $user = Auth::user();
        $id = $user->id;
        $seances = Seance::where('reserved', 0)
            ->whereNotIn('id', function ($query) {
                $query->select('id')
                    ->from('seances')
                    ->where('idGroupe', $idGroupe)
                    ->orWhere('idProf', $id);
            })
            ->get();
        return view('salles_dispo',compact('seances'));
    }


}
