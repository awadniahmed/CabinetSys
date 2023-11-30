@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-11 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
                @if (session('status2'))
                <div class="alert alert-success">{{session('status2')}}</div>
                 @endif
                <div class="table-responsive">
                  <table class="table">
                    <thead >
                      <tr>
                        <th>  Date </th>
                        <th> Docteur  </th>
                        <th> patient  </th>
                        <th> Description  </th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ordonnance as $ordonnance)
                      <tr>
                        <td>
                            {{$ordonnance->date}}
                        </td>
                        <td>
                            {{$ordonnance->docteur}}
                        </td>
                        <td>
                            {{$ordonnance->patient}}
                        </td>
                        <td>
                            {{$ordonnance->description}}
                        </td>
                        <td><a href="modifierOrdonnance/{{$ordonnance->id}}" ><button type="button" class="btn btn-info btn-rounded btn-fw">Modifier</button></a></td>
                        <td><a href="deletOrdonnance/{{$ordonnance->id}}" > <button type="button" class="btn btn-danger btn-rounded btn-fw">Supprimer</button></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div></div></div></div>
            </div>
@endsection

