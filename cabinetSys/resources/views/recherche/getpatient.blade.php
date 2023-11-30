@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-11 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nom </th>
                        <th>Prénom</th>
                        <th>Age</th>
                        <th>Sexe</th>
                        <th>Date Naissance </th>
                        <th>Téléphone</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($patient as $patient)
                      <tr>
                        <td>
                            {{$patient->nom}}
                        </td>
                        <td >
                            {{$patient->prenom}}
                        </td>
                        <td >
                            {{$patient->age}}
                          </td>
                        <td>
                            {{$patient->sexe}}
                        </td>
                        <td>
                            {{$patient->date_naissance}}
                        </td>
                        <td>
                            {{$patient->phone}}
                        </td>
                        <td><a  href="dossierMedical/{{$patient->id}}" > <button type="button" class="btn btn-success btn-rounded btn-fw">Dossier médical</button></a></td>
                        <td><a href="modifierpatient/{{$patient->id}}"><button type="button" class="btn btn-info btn-rounded btn-fw">Modifier</button></a></td>
                        <td><a href="deletpatient/{{$patient->id}}" > <button type="button" class="btn btn-danger btn-rounded btn-fw">Supprimer</button></a></td>
                      </tr>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
          </div></div></div></div></div>
@endsection

