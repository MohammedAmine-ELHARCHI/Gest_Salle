

<x-app-layout>




<section style="margin:200px;" class="vh-100 gradient-custom">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Jour</th>
      <th scope="col">heur Debut</th>
      <th scope="col">heur Fin</th>
      <th scope="col">Professeur</th>
      <th scope="col">Salle</th>
      <th scope="col">Groupe</th>
    </tr>
  </thead>
  <tbody>

  @foreach($seances as $value)
  <tr>
      
      <td>{{$value->jour}}</td>
      <td>{{$value->heurDebut}}</td>
      <td>{{$value->heurFin}}</td>
      <td>{{$value->idProf}}</td>
      <td>{{$value->idSalle}}</td>
      <td>{{$value->idGroupe}}</td>
    
    </tr>

@endforeach

    
   
  </tbody>
  <button type="button" class="btn btn-light"><a href="{{route('generate-pdf')}}">Download Emploi des Seances</a></button>
</table>
</section>
</x-app-layout>
