<x-app-layout>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">            
            <h2 class="mb-4 pb-2 mr-5 pb-md-0 mb-md-5 text-center text-success" >{{ $user->name }}</h4>

            <table class="table">
              <thead>
                <tr>
                  <th name="groupe">Groupe</th>
                  <th name="niveau">Niveau</th>
                  <th name="filiere">Filiere</th>
                  <th name="email">Email</th>
                  <th name="trouverLaSalle">Salle</th>
                </tr>
              </thead>              
              <tbody>
                @foreach($result as $item)
                <tr>
                  <td>Groupe {{ $item->GroupeNumber}}</td>
                  <td>{{ $item->niveau }}</td>
                  <td>{{ $item->nomFiliere }}</td>
                  <td>{{ $item->email_delegue }}</td>
                  <td><a href="{{ route('salleDispo', ['idgroupe' => $item->id]) }}"><button class="primary">Trouver</button></a></td>
                </tr>
                @endforeach
                </tr>
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