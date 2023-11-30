@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-11 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
                <div>
                    <!-- Navbar content -->
                    <form  method="post" action="{{ route('getObservation') }}"  >
                        @csrf
                        <input  type="text" name="id" placeholder="Numéro d'observation" >
                        <button type="submit">Chercher</button>
                      </form>
                    </div>
                @if (session('status2'))
                <div class="alert alert-success">{{session('status2')}}</div>
                 @endif
                 @if (session('error'))
                 <div class="alert alert-success">{{session('error')}}</div>
                  @endif
                <div class="table-responsive">
                  <table class="table">
                    <thead >
                      <tr>
                        <th>ID</th>
                        <th>  Date_Ad </th>
                        <th> Docteur  </th>
                        <th> patient  </th>

                        <th>Note </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($observation as $observation)
                      <tr>
                        <td>
                            {{$observation->id}}
                        </td>
                        <td>
                            {{$observation->date_ad}}
                        </td>
                        <td>
                            {{$observation->docteur}}
                        </td>
                        <td>
                            {{$observation->patient}}
                        </td>
                         <td>
                            {{$observation->note}}
                        </td>
                        <td><a href="modifierObservation/{{$observation->id}}" ><button type="button" class="btn btn-warning">Modifier</button></a></td>
                        <td><a href="deletObservation/{{$observation->id}}" > <button type="button" class="btn btn-danger">Supprimer</button></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
          </div>
    </div>
      </div></div></div>
@endsection

