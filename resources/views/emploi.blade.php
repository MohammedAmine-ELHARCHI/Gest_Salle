<x-app-layout>
    


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-12 col-xl-12">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">            
            <h2 class="mb-4 pb-2 mr-5 pb-md-0 mb-md-5 text-center text-success" >Emploi du temps</h4>

            <table class="table">
        <thead>
            <tr>
                <th>Jour / Date</th>
                <th>08:30</th>
                <th></th>
                <th>10:30</th>
                <th></th>
                <th>12:30</th>
                <th></th>
                <th>14:30</th>
                <th></th>
                <th>16:30</th>
                <th></th>
                <th>18:30</th>
            </tr>
        </thead>
        <tbody>
            @foreach (['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'] as $day)
                <tr>
                    <th>{{ $day }}</th>
                    @foreach (['','08:30:00','','10:30:00','', '12:30:00','', '14:30:00','', '16:30:00','', '18:30:00'] as $time)
                        <td>
                            @if ($seance = $schedule->filter(function ($seance) use ($day, $time) {
                                return $seance->jour == $day && $seance->heurDebut == $time;
                            })->first())
                            {{ $seance->idanne }} {{ $seance->nomFiliere }} {{ $seance->GroupeNumber }}
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>


              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
</x-app-layout>
