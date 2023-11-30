@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-11 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
                <div>
                    <!-- Navbar content -->
                    <form  method="post" action="{{ route('getOrdonnance') }}">
                        @csrf
                        <input type="text" placeholder="Numéro D'ordonnance" name="id" aria-label="Chercher">
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
                            {{$ordonnance->id}}
                        </td>
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
                        <td><a href="modifierOrdonnance/{{$ordonnance->id}}" ><button type="button" class="btn btn-warning">Modifier</button></a></td>
                        <td><a href="deletOrdonnance/{{$ordonnance->id}}" > <button type="button" class="btn btn-danger">Supprimer</button></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div></div></div></div>
            </div>
@endsection

