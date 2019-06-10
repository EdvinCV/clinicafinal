@extends('layouts.app')
@section('Titulo','Información Pacientes')

@section('content')
<a href="{{ url('/createPaciente') }}" class="btn btn-primary">Nuevo Paciente</a>
<div class="container row">
  <div class="row justify-content-center mx-auto">
    <div class="table-responsive">
      <div class="col-md-12">
        <br><br>

        <div class="col-md-4">
            <form action="/searchp" method="get">
                <div class="form-group row">
                    <input type="search" name="search" class="">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>  
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Telefono</th>
              <th>Sexo</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($pacientes as $p)
            <tr>
              <td>{{ $p->PacienteId }}</td>
              <td>{{ $p->Nombres }}</td>
              <td>{{ $p->Apellidos }}</td>
              <td>{{ $p->Telefono }}</td>
              <td>{{ $p->Sexo }}</td>
              <td>
              <a href=" {{ url('/consultas/'.$p->PacienteId.'/create') }} " class="btn btn-success btn-circle btn-sm">
                    <i class="fas fa-check"></i>
              </a>
              <a href=" {{ url('/pacientes/'.$p->PacienteId.'/editar') }} " class="btn btn-info btn-circle btn-sm">
                    <i class="fas fa-exclamation-triangle"></i>
              </a>
              <a href=" {{ url('/historial/'.$p->PacienteId) }} " class="btn btn-warning btn-circle btn-sm">
                    <i class="fas fa-info"></i>
              </a>
              <a href=" {{ url('/pacientes/delete/ '.$p->PacienteId) }} " class="btn btn-danger btn-circle btn-sm">
                    <i class="fas fa-trash"></i>
              </a>

              </td>
            </tr> 
          @endforeach           
          </tbody>
        </table>
        {{ $pacientes->links() }}
      </div>
    </div>
  </div>
</div>
@endsection