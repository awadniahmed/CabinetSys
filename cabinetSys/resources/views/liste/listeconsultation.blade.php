@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-11 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
    <div>
        <!-- Navbar content -->
        <form style="margin-right: 50px" method="post" action="{{ route('getConsultation') }}">
            @csrf
            <input type="date" placeholder="Numéro de Consultation" name="date" aria-label="Chercher">
            <button  type="submit">Chercher</button>
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
            <th> Date</th>
            <th> Docteur  </th>
            <th>L'heure De Consultation  </th>
            <th>Type de Consultation</th>
            <th> Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($consultation as $consultation)
          <tr>
            <td>
                {{$consultation->id}}
            </td>
            <td>
                {{$consultation->date}}
            </td>
            <td>
                {{$consultation->docteur}}
            </td>

            <td>
                {{$consultation->time}}
            </td>
            <td>
                {{$consultation->typeConsultation}}
            </td>
            <td>
                {{$consultation->description}}
            </td>
            <td><a href="modifierConsultation/{{$consultation->id}}" ><button type="button" class="btn btn-warning ">Modifier</button></a></td>
            <td><a href="deletConsultation/{{$consultation->id}}" > <button type="button" class="btn btn-danger ">Supprimer</button></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div></div></div></div>
</div>
@endsection
