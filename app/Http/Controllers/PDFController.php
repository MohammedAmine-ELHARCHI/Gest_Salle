<?php
  
namespace App\Http\Controllers;
  

use App\Models\User;
use App\Models\Seance;
use PDF;
use DB;
use Auth;
  
class PDFController extends Controller
{
    public function generatePDF()
    {
        $users = User::get();
        $seances = Seance::where('reserved', 0)
            ->whereNotIn('id', function ($query) {
                $query->select('id')
                    ->from('seances')
                    ->where('idGroupe', 1)
                    ->orWhere('idProf', 1);
            })
            ->get();
        $data = [
            'title' => 'Emploi de temps',
            'date' => date('m/d/Y'),
            'users' => $users,
            'seances' => $seances
        ]; 

        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->download('sceances_emploi.pdf');
    }

    public function generateEmploie(){

        $user = Auth::user();
        $id = $user->id;
        $schedule = DB::table('seances')
        ->join('groupes', 'seances.idGroupe', '=', 'groupes.id')
        ->join('filieres', 'groupes.idFiliere', '=', 'filieres.id')
        ->where('seances.idProf', $id)
        ->select('seances.*', 'groupes.idanne', 'filieres.nomFiliere', 'groupes.GroupeNumber')
        ->orderBy('seances.jour', 'asc')
        ->orderBy('seances.heurDebut', 'asc')
        ->get();

    
        $pdf = PDF::loadView('myEmploiPDF', ['schedule' => $schedule])->setPaper('a3', 'portrait');
        return $pdf->download('profEmploie.pdf');
    }
}