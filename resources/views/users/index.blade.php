@extends('layouts.app')
@section('Titulo','Información Usuarios')

@section('content')
<a href="{{ url('/users/create') }}" class="btn btn-primary">Crear Usuario</a>
<div class="container row">
  <div class="row justify-content-center mx-auto">
    <div class="table-responsive">
      <div class="col-md-12">
        <br><br>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>Nombre Usuario</th>
              <th>Correo Electrónico</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($users as $u)
            <tr>
              <td>{{ $u->id }}</td>
              <td>{{ $u->name }}</td>
              <td>{{ $u->email }}</td>
              <td>
              <a href=" {{ url('/users/delete/ '.$u->id) }} " class="btn btn-danger btn-circle btn-sm">
                    <i class="fas fa-trash"></i>
              </a>

              </td>
            </tr> 
          @endforeach           
          </tbody>
        </table>
       
      </div>
    </div>
  </div>
</div>
@endsection