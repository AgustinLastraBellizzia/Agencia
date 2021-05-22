@extends('admin.template')

@section('title','Lista de agentes')

@section('content')
    Agentes
   
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lista de agentes</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code> </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Nombre </th>
                          <th> telefono </th>
                          <th> experiencia </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($agentes as $agente)
                    <p> Agente:{{ $agente->nombre}} </p>

                        <tr>
                          <td> {{ $agente->id}} </td>
                          <td> {{ $agente->nombre}}</td>
                          <td>
                          {{ $agente->telefono}}
                          </td>
                          <td> {{ $agente->experiencia}} </td>
                        </tr>
                           
@endforeach
                      </tbody>
                    </table>
                    {{ $agentes->links() }}
                  </div>
                </div>
              </div>
@endsection