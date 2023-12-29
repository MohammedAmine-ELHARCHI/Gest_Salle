

<x-app-layout>
    
<!-- <section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Creer une nouvelle seance</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Ajouter une seance</h3>
            
            <form method="post" action="{{ route('storeSeance') }}" >
            @csrf
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  <select name="heurDebut" class=" mb-2 pt-2 form-select" aria-label="Default select example">
  <option selected>Choisir</option>
  <option value="8">08:00</option>
  <option value="9">09:00</option>
  <option value="10">10:00</option>
  <option value="11">11:00</option>
  <option value="12">12:00</option>
  <option value="13">13:00</option>
  <option value="14">14:00</option>
  <option value="15">15:00</option>
  <option value="16">16:00</option>
  <option value="17">17:00</option>
  <option value="18">18:00</option>
  <option value="19">19:00</option>
  
</select>
                    <label class="form-label" for="firstName">Heur Debut</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  <select name="heurFin" class=" mb-2 pt-2 form-select" aria-label="Default select example">
  <option selected>Choisir</option>
  <option value="8">08:00</option>
  <option value="9">09:00</option>
  <option value="10">10:00</option>
  <option value="11">11:00</option>
  <option value="12">12:00</option>
  <option value="13">13:00</option>
  <option value="14">14:00</option>
  <option value="15">15:00</option>
  <option value="16">16:00</option>
  <option value="17">17:00</option>
  <option value="18">18:00</option>
  <option value="19">19:00</option>
  
</select>
                    <label class="form-label" for="lastName">Heure Fin</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input name="jour" type="date" class="form-control form-control-lg" id="birthdayDate" />
                    <label for="birthdayDate" class="form-label">Le jour</label>
                  </div>

                  <!-- <div class="col-12">

                <select name="jour" class=" mt-4 pt-2 form-select" aria-label="Default select example">
                    <option selected>Choisir un jour</option>

  


      <option value="Lundi">Lundi</option>
      <option value="Mardi">Mardi</option>
      <option value="Mercredi">Mercredi</option>
      <option value="Jeudi">Jeudi</option>
      <option value="Vendredi">Vendredi</option>
      <option value="Samedi">Samedi</option>
      <option value="Dimanche">Dimanche</option>
    
  
</select>
</div> -->

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">EMSI : </h6>

                  <div class="form-check form-check-inline">
                    <input  class="form-check-input" type="radio" name="centre" id="femaleGender"
                      value="gueliz" checked />
                    <label class="form-check-label" for="femaleGender">Geuliz</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="centre" id="maleGender"
                      value="centre" />
                    <label class="form-check-label" for="maleGender">Centre</label>
                  </div>

                  

                </div>
              </div>

             

              <div class="row">
                <div class="col-12">

                <select name="idProf" class=" mt-4 pt-2 form-select" aria-label="Default select example">
  <option selected>Choisir un professeur</option>

  
			@foreach($users as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
  
</select>
</div>
<br>
<div class="col-12">
<select name="idGroupe" class=" mt-4 pt-2 form-select" aria-label="Default select example">
  <option selected>Choisir un Groupe</option>
  @foreach($groupes as $item)
            <option value="{{$item->id}}">{{$item->GroupeNumber}}</option>
            @endforeach
</select>
</div>
<div class="col-12">
<select name="idSalle" class=" mt-4 pt-2 form-select" aria-label="Default select example">
  <option selected>Choisir une Salle</option>
  @foreach($salles as $item)
            <option value="{{$item->id}}">{{$item->libelle}}</option>
            @endforeach
</select>

                </div>
              </div>

              <div class="mt-4 pt-2 ">
              <div class="col-12">
    <button class="btn btn-primary" type="submit">Créer une Séance</button>
  </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</x-app-layout>
