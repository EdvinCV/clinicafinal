@extends('layouts.app')
@section('Titulo','CONSULTA')

@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Información Paciente</h1><br><br>
              </div>

              <form method="post" action="" class="user text-center" enctype="multipart/form-data">
              {{ csrf_field() }}
                
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input  value="{{$p->Nombres}}" name="Nombres" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombres" readonly>
                        <input  value="{{$p->PacienteId}}" name="PacienteId" type="hidden" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombres" readonly>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input value="{{$p->Apellidos}}" name="Apellidos" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Apellidos" readonly>
                    </div>
                </div>

                <h4>Datos Paciente</h4>
                <div class="form-group row">
                    
                    <div class="col-md-4 col-sm-4 mb-3 mb-sm-0">
                        <label for="Fecha">Fecha Nacimiento</label>
                        <input value="{{$p->FechaNacimiento}}" id="Fecha" name="FechaNacimiento" type="date" class="form-control form-control-user" readonly>
                    </div>

                    <div class="col-md-4 col-sm-4 mb-3 mb-sm-0">
                        <label for="Telefono">Telefono</label>
                        <input  value="{{$p->Telefono}}" name="Telefono" id="Telefono" type="text" class="form-control form-control-user" readonly>
                    </div>
                    
                    <div class="col-md-4 col-sm-4 mb-3 mb-sm-0">
                        <label for="Peso">Peso</label>
                        <input value="{{$p->Peso}}" name="Peso" id="Peso" class="form-control form-control-user" type="number" step="0.01" readonly>
                    </div>
                </div>
                    
                <div class="form-group row">
                    
                    <div class="col-md-4 col-sm-4 mb-3 mb-sm-0">
                        <label for="">Altura (cms)</label>
                        <input value="{{$p->Altura}}" name="Altura" type="number" class="form-control form-control-user" id="Altura" placeholder="Altura....." step="0.01" readonly>
                    </div>

                    <div class="col-md-4 col-sm-4 mb-3 mb-sm-0">
                        <label for="TipoSangre">Tipo Sangre</label>
                        <input value="{{$p->TipoSangre}}" name="TipoSangre" type="number" class="form-control form-control-user" id="Altura" placeholder="Altura....." step="0.01" readonly>
                    </div>

                    <div class="col-md-4 col-sm-4 mb-3 mb-sm-0">
                        <label for="Sexo">Sexo</label>
                        <input value="{{$p->Sexo}}" name="Sexo" type="number" class="form-control form-control-user" id="Altura" placeholder="Altura....." step="0.01" readonly>
                    </div>
                    
                </div> 

                <h4>Operaciones - Observaciones</h4>
                <div class="form-group row">
                    <div class="col-md-6 col-sm-4 mb-3 mb-sm-0">  
                        <textarea name="Operaciones" id="" cols="110" rows="2" readonly>{{$p->Operaciones}}</textarea >          
                    </div>
                </div>   
                
              </form>
                <br><br>
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">OBSERVACIONES - RECETAS</h6>
                  </div>
                  <div class="card-body">
                    @foreach($obs as $o)
                    
                    <p>{!! $o->Sintomas !!}</p>
                    <p>{!! $o->Observaciones !!}</p>
                    <p>-------------------------------------------------------</p>
                    @endforeach
                  </div>
                  
                </div>
               

                

       


              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">INFORMACIÓN CONSULTA</h1><br><br>
              </div>

              <form method="post" action="{{ url('/consultas/store')}}" enctype="multipart/form-data" class="user text-center">
              {{ csrf_field() }}
              <input  value="{{$p->PacienteId}}" name="PacienteId" type="hidden" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombres" readonly>
              <h4>Sintomas</h4>
              <textarea  class="ckeditor" name="Sintomas" id="Ingredientes" rows="10" cols="80"></textarea>
              <br><br>
              <h4>Observaciones</h4>
              <textarea  class="ckeditor" name="Observaciones" id="Preparacion" rows="10" cols="80"></textarea>
              <br><br>
              <h4>Receta</h4>
              <textarea  class="ckeditor" name="Descripcion" id="Preparacion" rows="10" cols="80"></textarea>

    

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