@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-11 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead >
                      <tr>
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
                        <td><a href="modifierObservation/{{$observation->id}}" ><button type="button" class="btn btn-info btn-rounded btn-fw">Modifier</button></a></td>
                        <td><a href="deletObservation/{{$observation->id}}" > <button type="button" class="btn btn-danger btn-rounded btn-fw">Supprimer</button></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
          </div>
    </div>
      </div></div></div>
@endsection

