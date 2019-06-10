@extends('layouts.app')
@section('Titulo','Información Paciente')

@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">INFORMACIÓN</h1><br><br>
              </div>

              <form method="post" action="{{ url('/pacientes/update/'.$p->PacienteId)}}" class="user text-center">
              {{ csrf_field() }}
                
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input  value="{{$p->Nombres}}" name="Nombres" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombres">
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input value="{{$p->Apellidos}}" name="Apellidos" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Apellidos">
                    </div>
                </div>

                <h4>Datos Paciente</h4>
                <div class="form-group row">
                    
                    <div class="col-md-4 col-sm-4 mb-3 mb-sm-0">
                        <label for="Fecha">Fecha Nacimiento</label>
                        <input value="{{$p->FechaNacimiento}}" id="Fecha" name="FechaNacimiento" type="date" class="form-control form-control-user">
                    </div>

                    <div class="col-md-4 col-sm-4 mb-3 mb-sm-0">
                        <label for="Telefono">Telefono</label>
                        <input  value="{{$p->Telefono}}" name="Telefono" id="Telefono" type="text" class="form-control form-control-user">
                    </div>
                    
                    <div class="col-md-4 col-sm-4 mb-3 mb-sm-0">
                        <label for="Peso">Peso</label>
                        <input value="{{$p->Peso}}" name="Peso" id="Peso" class="form-control form-control-user" type="number" step="0.01">
                    </div>
                </div>
                    
                <div class="form-group row">
                    
                    <div class="col-md-4 col-sm-4 mb-3 mb-sm-0">
                        <label for="">Altura (cms)</label>
                        <input value="{{$p->Altura}}" name="Altura" type="number" class="form-control form-control-user" id="Altura" placeholder="Altura....." step="0.01">
                    </div>

                    <div class="col-md-4 col-sm-4 mb-3 mb-sm-0">
                        <label for="TipoSangre">Tipo Sangre</label>
                        <select  name="TipoSangre" id="TipoSangre" class="form-control">
                            <option value="{{$p->TipoSangre}}">{{$p->TipoSangre}}</option>
                            <option value="O Negativo">O-</option>
                            <option value="O Positivo">O+</option>
                            <option value="A Negativo">A-</option>
                            <option value="A Positivo">A+</option>
                            <option value="B Negativo">B-</option>
                            <option value="B Positivo">B+</option>
                            <option value="AB Negativo">AB-</option>
                            <option value="AB Positivo">AB+</option>
                        </select>
                    </div>

                    <div class="col-md-4 col-sm-4 mb-3 mb-sm-0">
                        <label for="Sexo">Sexo</label>
                        <select value="{{$p->Sexo}}" name="Sexo" id="Sexo" class="form-control">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    
                </div> 

                <h4>Operaciones - Observaciones</h4>
                <div class="form-group row">
                    <div class="col-md-6 col-sm-4 mb-3 mb-sm-0">  
                        <textarea name="Operaciones" id="" cols="110" rows="2">{{$p->Operaciones}}</textarea>          
                    </div>
                </div>   

                <button type="submit" class="btn btn-primary btn-user btn-block">Actualizar</button>
                
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

 



@endsection