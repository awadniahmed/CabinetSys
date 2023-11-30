@extends('layouts.master')
@section('content')
<div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style="color:blue">Envoyer une Lettre</h4>

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                 @endif

                <form class="forms-sample" method="post" action="insertLettre">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                  <div class="form-group">
                    <label for="exampleInputUsername1">Destination</label>
                    <input type="text" class="form-control" id="exampleInputUsername1"  name="destignation" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Date</label>
                    <input type="date" class="form-control" id="exampleInputConfirmPassword1" name="date" required >
                  </div>
                          </div></div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Email Patient</label>
                                    <input type="email" class="form-control" id="exampleInputConfirmPassword1" name="patient" required >
                                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Docteur</label>
                        <select class="form-control"  name="docteur" required>
                            @foreach ($docteur as  $docteur )
 <option value="{{$docteur->nom}}{{" "}}{{$docteur->prenom}}">{{$docteur->nom}}{{" "}}{{$docteur->prenom}}</option>
                            @endforeach
                          </select>
                  </div>
                            </div></div></div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                  <button type="submit" class="btn btn-primary me-2">Envoyer  </button>
                      </div></div>
                      <div class="col-md-6">
                        <div class="form-group row">
                  <a href="{{route('listeAllLettre')}}"><button type="button" class="btn btn-success"> Afficher la liste Liste des Lettres</button></a>
                        </div></div></div>
                </form>
              </div>

            </div>
          </div>
        </div>
</div>
@endsection

