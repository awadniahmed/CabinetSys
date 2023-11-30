@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-16 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                    <h6 class="text-light bg-dark pl-1"  align = "center">Dossier Médical Numéro: {{$patient->id}}</h6>

                    <div class="row">
                       <div class="col-md-6">
                         <div class="form-group row">
                    <ul class="list-star">
                    <li><label for="exampleInputUsername1" > <i class="text-primary"> Nom & Prénom :</i> <i>{{$patient->nom}}</i> </label></li>
                   <li> <label for="exampleInputUsername1"> <i class="text-primary"> Date Naissance: </i> <i>{{$patient->date_naissance}} </i></label></li>
                    <li> <label for="exampleInputUsername1"> <i class="text-primary"> Age: </i> <i>{{$patient->age}} </i></label></li>
                </ul>
                </div></div>
                    <div class="col-md-6">
                         <div class="form-group row">
                            <ul class="list-star">
                            <li><label for="exampleInputUsername1"><i class="text-primary">  Sexe :</i> <i> {{$patient->sexe}} </i></label></li>
                            <li><label for="exampleInputUsername1"><i class="text-primary"> Email : </i> <i> {{$patient->email}} </i></label></li>
                            <li><label for="exampleInputUsername1"><i class="text-primary">Num Téléphone: </i> <i>{{$patient->phone}} </i></label></li>
                            </ul>
                    </div></div></div>

                     <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                    <h6 class="text-light bg-dark pl-1" align = "center">Liste des Ordonnance</h6>
                        @foreach ($ordonnance as $ordonnance )
                        <label for="exampleInputUsername1" style="color:green"><i>{{$ordonnance->created_at}}:</i></label>
                        <ul class="list-ticked">
                        <li>{{$ordonnance->description}}</li>
                        </ul>
                        @endforeach
                          </div></div>
                          <div class="col-md-6">
                            <div class="form-group row">
                          <h6  class="text-light bg-dark pl-1"  align = "center">Liste des Observation</h6>
                        @foreach ($observation as $observation )

                        <label for="exampleInputUsername1" style="color:green"><i>{{$observation->created_at}}:</i></label>
                        <ul class="list-ticked">
                         <li>{{$observation->note}}</li>
                        </ul>
                        @endforeach
                        </div></div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

