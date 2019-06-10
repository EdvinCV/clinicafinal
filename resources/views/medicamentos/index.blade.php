@extends('layouts.app')
@section('Titulo','Información Pacientes')

@section('content')
<div class="container row">
  <div class="row justify-content-center mx-auto">
    <div class="table-responsive">
      <div class="col-md-12">
        <br><br>
        
        
        <div class="col-md-4">
            <form action="/searchm" method="get">
                <div class="form-group row">
                    <input type="search" name="search" class="">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>  
        <a href="{{ url('/medicamentos/create')}}" class="btn btn-primary btn-icon-split">Ingresar Medicamento</a>
        <br><br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Marca</th>
              <th>Precio</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($medicamentos as $m)
            <tr>
              <td>{{ $m->MedicamentoId }}</td>
              <td>{{ $m->NombreMedicamento }}</td>
              <td>{{ $m->Descripcion }}</td>
              <td>{{ $m->Marca }}</td>
              <td>Q.{{ $m->Precio }}</td>
              <td>
              <a href=" {{ url('/clientes/'.$m->MedicamentoId.'/editar') }} " class="btn btn-warning btn-circle btn-sm">
                    <i class="fas fa-info"></i>
                  </a>
              <a href=" {{ url('/clientes/'.$m->MedicamentoId.'/eliminar') }} " class="btn btn-danger btn-circle btn-sm">
                    <i class="fas fa-trash"></i>
                  </a>
              </td>
            </tr> 
          @endforeach           
          </tbody>
        </table>
        {{ $medicamentos->links() }}
      </div>
    </div>
  </div>
</div>
@endsection