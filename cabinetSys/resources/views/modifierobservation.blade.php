@extends('layouts.master')
@section('content')

    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style="color:blue">Modifier Les Données Observation N: {{$observation->id}}</h4>

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                 @endif

                <form class="forms-sample" method="post" action="{{ route('update-observation', ["id" => $observation->id]) }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">

                  <div class="form-group">
                    <label for="exampleInputUsername1">Patient</label>
                        <select class="form-control"  name="patient" required>
                            <option  value="{{$observation->patient}}" > {{$observation->patient}} </option>
                            @foreach ($patient as  $patient )
 <option value="{{$patient->nom}}{{"  "}}{{$patient->prenom}}">{{$patient->nom}}{{" "}}{{$patient->prenom}}</option>
                            @endforeach
                          </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Docteur</label>
                        <select class="form-control"  name="docteur"   required>
                            <option value="{{$observation->docteur}}">{{$observation->docteur}}</option>
                            @foreach ($docteur as  $docteur )
 <option value="{{$docteur->nom}}{{" "}}{{$docteur->prenom}}">{{$docteur->nom}}{{" "}}{{$docteur->prenom}}</option>
                            @endforeach
                          </select>
                  </div>
                          </div></div>
                            <div class="col-md-6">
                              <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Date_Ad </label>
                    <input type="text" class="form-control" id="exampleInputConfirmPassword1" value="{{$observation->date_ad}}"  name="date_ad" required >
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Note</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="note"></textarea>
                  </div>
                              </div></div></div>
                  <div class="form-group">

                  <button type="submit" class="btn btn-primary me-2">Modifier les données</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection

