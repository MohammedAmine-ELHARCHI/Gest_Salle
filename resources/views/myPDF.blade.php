<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>L'emploi de votre groupe a encadre.</p>
  
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

  @foreach($seances as $key => $value)
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
</body>
</html>