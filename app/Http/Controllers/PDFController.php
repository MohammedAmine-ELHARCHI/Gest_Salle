<?php
  
namespace App\Http\Controllers;
  

use App\Models\User;
use App\Models\Seance;
use PDF;
  
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
}