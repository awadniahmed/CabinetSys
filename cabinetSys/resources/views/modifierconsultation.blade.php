@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style="color:blue">Modifier Les Données Consultation N: {{$consultation->id}}</h4>

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                 @endif

                <form class="forms-sample" method="post" action="{{ route('update-consultation', ["id" => $consultation->id]) }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleInputUsername1">Date</label>
                    <input type="date" class="form-control" id="exampleInputUsername1" value="{{$consultation->date}}"  name="date" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Docteur</label>
                        <select class="form-control"  name="docteur"   required>
                            <option value="{{$consultation->docteur}}">{{$consultation->docteur}}</option>
                            @foreach ($docteur as  $docteur )
 <option value="{{$docteur->nom}}{{" "}}{{$docteur->prenom}}">{{$docteur->nom}}{{" "}}{{$docteur->prenom}}</option>
                            @endforeach
                          </select>
                  </div>
                          </div></div>
                          <div class="col-md-6">
                            <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleInputUsername1">L'heure de Consultation </label>
                    <input type="time" class="form-control" id="exampleInputUsername1" value="{{$consultation->time}}"  name="time" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Type Consultation</label>
                        <select class="form-control"  name="typeConsultation" required>
                            <option value="{{$consultation->typeConsultation}}">{{$consultation->typeConsultation}}</option>
                            @foreach ($typeConsultation as  $typeConsultation )
 <option value="{{$typeConsultation->designation}}">{{$typeConsultation->designation}}</option>
                            @endforeach
                          </select>
                     </div>
                            </div></div></div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                              </div>
                  <button type="submit" class="btn btn-primary me-2">Modifier les données</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection

