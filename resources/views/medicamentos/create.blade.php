@extends('layouts.app')

@section('content')
<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-12">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Ingreso de Medicamento</h1><br><br>
          </div>

          <form method="post" action="{{ url('/medicamentos/store')}}" class="user text-center">
          {{ csrf_field() }}
            
            <h5>Nombre Medicamento</h5>
            <div class="form-group row">                
              <div class="col-md-12 col-sm-4 mb-3 mb-sm-0">
                <input name="NombreMedicamento" type="number" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombre.....">
              </div>
            </div>

            <h5>Descripción</h5>
            <div class="form-group row">                
              <div class="col-md-12 col-sm-4 mb-3 mb-sm-0">
                <input name="Descripcion" type="number" class="form-control form-control-user" id="exampleFirstName" placeholder="Descripción.....">
              </div>
            </div>

            <h5>Marca</h5>
            <div class="form-group row">                
              <div class="col-md-12 col-sm-4 mb-3 mb-sm-0">
                <input name="Marca" type="number" class="form-control form-control-user" id="exampleFirstName" placeholder="Marca.....">
              </div>
            </div>

            <h5>Precio</h5>
                
            <div class="form-group row">    
                <div class="col-md-12 col-sm-4 mb-3 mb-sm-0">
                    <input name="Cantidad" type="number" step="0.01" class="form-control form-control-user" id="exampleFirstName" placeholder="Precio.....">
                </div>          
            </div> 
            <br><br>
            <button type="submit" class="btn btn-primary btn-user btn-block">Ingresar</button>
            
          </form>
          <hr>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

@endsection