@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-11 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div>
                <!-- Navbar content -->
                <form  method="post" action="{{ route('getRdv') }}">
                    @csrf
                    <input  type="date" placeholder="Search" name="date" aria-label="Search">
                    <button  type="submit">Search</button>
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
                    <th>Date  Jour </th>
                    <th>Designation</th>
                    <th>Date Début</th>
                    <th>Date Fin</th>
                    <th> Docteur  </th>
                    <th> patient  </th>
                    <th>  Etat </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($rdv as $rdv)
                  <tr >
                    <td>
                        {{$rdv->date}}
                    </td>
                    <td >
                        {{$rdv->designation}}
                    </td>
                    <td >
                        {{$rdv->dateDebut}}
                      </td>
                    <td>
                        {{$rdv->dateFin}}
                    </td>
                    <td>
                        {{$rdv->docteur}}
                    </td>
                    <td>
                        {{$rdv->patient}}
                    </td>
                    <td>
                        {{$rdv->etat}}
                    </td>
                    <td><a href="modifierrdv/{{$rdv->id}}" ><button type="button" class="btn btn-warning ">Modifier</button></a></td>
                    <td><a href="deletrdv/{{$rdv->id}}" > <button type="button" class="btn btn-danger ">Supprimer</button></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
