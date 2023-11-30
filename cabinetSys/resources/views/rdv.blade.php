@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style="color:blue">Créer un Rendez-vous</h4>

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                 @endif

                <form class="forms-sample" method="post" action="insertRdv">
                    @csrf
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleInputUsername1">Date</label>
                    <input type="date" class="form-control" id="exampleInputUsername1"  name="date" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Désignation</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Désignation" name="designation" required>
                  </div>
                    </div></div>
                    <div class="col-md-6">
                        <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleInputUsername1">L'heure de Début</label>
                    <input type="time" class="form-control" id="exampleInputUsername1" placeholder="00:00" name="dateDebut" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputUsername1">L'heure de Fin</label>
                    <input type="time" class="form-control" id="exampleInputUsername1" placeholder="00:00" name="dateFin" required>
                  </div>
                    </div></div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                      <div class="form-group">
                    <label for="exampleInputUsername1">Patient</label>
                        <select class="form-control"  name="patient" required>
                            @foreach ($patient as  $patient )
 <option value="{{$patient->nom}}{{"  "}}{{$patient->prenom}}">{{$patient->nom}}{{" "}}{{$patient->prenom}}</option>
                            @endforeach
                          </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Docteur</label>
                        <select class="form-control"  name="docteur" required>
                            @foreach ($docteur as  $docteur )
 <option value="{{$docteur->nom}}{{" "}}{{$docteur->prenom}}">{{$docteur->nom}}{{" "}}{{$docteur->prenom}}</option>
                            @endforeach
                          </select>
                  </div>
                    </div></div>

                    <div class="col-md-6">
                        <div class="form-group row">

                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Etat </label>
                    <input type="text" class="form-control" id="exampleInputConfirmPassword1" name="etat" required >
                  </div>
                </div></div>
            </div>

            <div class="row">
                <div class="col-md-6">
                <div class="form-group row">

                  <button type="submit" class="btn btn-primary me-2">Créer rendez-vous</button>
                  </div></div>
                  <div class="col-md-6">
                    <div class="form-group row">
                        <a href="{{route('listPatientDocteurRdv')}}"><button type="button" class="btn btn-success"> Afficher la Liste des rendez-vous</button></a>
                    </div></div>
            </div>
                </form>
              </div>

            </div>
          </div>
        </div>

    </div>
@endsection

