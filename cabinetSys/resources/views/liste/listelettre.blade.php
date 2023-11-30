@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-11 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
                <div>
                    <!-- divbar content -->
                    <form style="margin-right: 50px">
                        <input type="search" placeholder="Chercher" aria-label="Chercher">
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
                        <th> Date</th>
                        <th> Docteur  </th>
                        <th> Patient  </th>
                        <th> Destination </th>
                        <th> Description</th>



                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($lettre as $lettre)
                      <tr>
                        <td>
                            {{$lettre->date}}
                        </td>
                        <td>
                            {{$lettre->docteur}}
                        </td>
                        <td>
                            {{$lettre->patient}}
                        </td>
                        <td>
                            {{$lettre->destignation}}
                        </td>
                        <td>
                            {{$lettre->description}}
                        </td>


                        <td><a href="modifierLettre/{{$lettre->id}}" ><button type="button" class="btn btn-warning ">Modifier</button></a></td>
                        <td><a href="deletLettre/{{$lettre->id}}" > <button type="button" class="btn btn-danger ">Supprimer</button></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div></div></div></div>
            </div>
@endsection

