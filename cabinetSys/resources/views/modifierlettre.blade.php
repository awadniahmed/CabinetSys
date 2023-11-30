@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style="color:blue">Modifier Les Données  Lettre N: {{$lettre->id}}</h4>

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                 @endif

                <form class="forms-sample" method="post" action="{{ route('update-lettre', ["id" => $lettre->id]) }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleInputUsername1">Destination</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" value="{{$lettre->destignation}}"  name="destignation" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Date</label>
                    <input type="date" class="form-control" id="exampleInputConfirmPassword1" value="{{$lettre->date}}"  name="date" required >
                  </div>
                </div></div>

                <div class="col-md-6">
                    <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleInputUsername1">Patient</label>
                        <select class="form-control"  name="patient" required>
                            <option  value="{{$lettre->patient}}" > {{$lettre->patient}} </option>
                            @foreach ($patient as  $patient )
 <option value="{{$patient->nom}}{{"  "}}{{$patient->prenom}}">{{$patient->nom}}{{" "}}{{$patient->prenom}}</option>
                            @endforeach
                          </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputUsername1">Docteur</label>
                        <select class="form-control"  name="docteur"   required>
                            <option value="{{$lettre->docteur}}">{{$lettre->docteur}}</option>
                            @foreach ($docteur as  $docteur )
 <option value="{{$docteur->nom}}{{" "}}{{$docteur->prenom}}">{{$docteur->nom}}{{" "}}{{$docteur->prenom}}</option>
                            @endforeach
                          </select>
                  </div></div></div></div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" ></textarea>
                  </div>

                  <div class="form-group">

                  <button type="submit" class="btn btn-primary me-2">Modifier les données</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection

