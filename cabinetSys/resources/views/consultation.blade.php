@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style="color:blue">Créer Consultation</h4>
                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                 @endif

                <form class="forms-sample" method="post" action="insertConsultation">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Date</label>
                     <input type="date" class="form-control" id="exampleInputConfirmPassword1" name="date" required >
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
                    <label for="exampleInputConfirmPassword1">time</label>
                    <input type="time" class="form-control" id="exampleInputConfirmPassword1" name="time" required >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Type Consultation</label>
                    <input type="" class="form-control" id="exampleInputConfirmPassword1" name="typeConsultation" required >
                  </div>
                            </div></div></div>
                     <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">

                  <button type="submit" class="btn btn-primary me-2">Ajouter Consultation</button>
                          </div></div>
                          <div class="col-md-6">
                            <div class="form-group row">
                  <a href="{{route('listeAllConsultation')}}"><button type="button" class="btn btn-success"> Afficher la Liste des Consultations</button></a>
                            </div></div></div>
                </form>
              </div>

            </div>
          </div>
        </div>

</div>
@endsection

