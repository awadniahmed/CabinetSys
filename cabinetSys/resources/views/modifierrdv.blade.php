@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style="color:blue">Modifier les Données Rendez-vous N: {{$rdv->id}}</h4>

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                 @endif

                <form class="forms-sample" method="post" action="{{ route('update-rdv', ["id" => $rdv->id]) }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleInputUsername1">Date</label>
                    <input type="date" class="form-control" id="exampleInputUsername1" value="{{$rdv->date}}"  name="date" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Désignation</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" value="{{$rdv->designation}}"  placeholder="Désignation" name="designation" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">L'heure de Début</label>
                    <input type="time" class="form-control" id="exampleInputUsername1" value="{{$rdv->dateDebut}}"  name="dateDebut" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputUsername1">L'heure de Fin</label>
                    <input type="time" class="form-control" id="exampleInputUsername1" value="{{$rdv->dateFin}}" name="dateFin" required>
                  </div>
                          </div></div>
                            <div class="col-md-6">
                              <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleInputUsername1">Patient</label>
                        <select class="form-control"  name="patient"  required>
                            <option  value="{{$rdv->patient}}">{{$rdv->patient}}</option>
                            @foreach ($patient as  $patient )
 <option value="{{$patient->nom}}{{"  "}}{{$patient->prenom}}">{{$patient->nom}}{{" "}}{{$patient->prenom}}</option>
                            @endforeach
                          </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Docteur</label>
                        <select class="form-control"  name="docteur"  required>
                        <option  value="{{$rdv->docteur}}">{{$rdv->docteur}}</option>
                            @foreach ($docteur as  $docteur )
 <option value="{{$docteur->nom}}{{" "}}{{$docteur->prenom}}">{{$docteur->nom}}{{" "}}{{$docteur->prenom}}</option>
                            @endforeach
                          </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Etat </label>
                    <input type="text" class="form-control" id="exampleInputConfirmPassword1" value="{{$rdv->etat}}"  name="etat" required >
                  </div>
                              </div></div></div>
                  <div class="form-group">

                  <button type="submit" class="btn btn-primary me-2">Modifier les données
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection

