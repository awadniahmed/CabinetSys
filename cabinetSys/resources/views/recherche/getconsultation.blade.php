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
            <td><a href="modifierConsultation/{{$consultation->id}}" ><button type="button" class="btn btn-info btn-rounded btn-fw">Modifier</button></a></td>
            <td><a href="deletConsultation/{{$consultation->id}}" > <button type="button" class="btn btn-danger btn-rounded btn-fw">Supprimer</button></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div></div></div></div>
</div>
@endsection
