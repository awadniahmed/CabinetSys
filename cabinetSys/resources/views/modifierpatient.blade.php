@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style="color:blue">Modifier les Données Patient N: {{$patient->id}}</h4>

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                 @endif

                <form class="forms-sample" method="POST" action="{{ route('update-patient', ["id" => $patient->id]) }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                    <div class="form-group">
                        <input type="text" class="form-control" style="display:none" name="id" value="{{$patient->id}}" required>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Nom</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nom" name="nom" value="{{$patient->nom}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Prénom</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Prénom" name="prenom" value="{{$patient->prenom}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Age</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Age" name="age" value="{{$patient->age}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Sexe</label>

                        <select class="form-control" id="exampleInputMobile" name="sexe" required>
                            <option value="{{$patient->sexe}}">{{$patient->sexe}}</option>
                            <option value="homme">Homme</option>
                            <option value="femmes"> Femme</option>
                          </select>
                  </div>
                          </div></div>
                            <div class="col-md-6">
                              <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Date Naissance </label>
                    <input type="date" class="form-control" id="exampleInputConfirmPassword1" name="date_naissance" value="{{$patient->date_naissance}}" required >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Addresse Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="{{$patient->email}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Numéro de Télephone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Numéro de Téléphone"  name="phone" value="{{$patient->phone}}" required>
                  </div>
                              </div></div></div>

                  <input type="submit" class="btn btn-primary me-2" value=" Modifier les données">
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection

