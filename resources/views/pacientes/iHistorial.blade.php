<html>
<head>
    <style>
        .cabecera {
            text-align: center;
            border-style: solid;
        }
        .info {
            border-style: solid;
            border-color: #D7CFCD;
            margin: 1px;
        }

    </style>
</head>


<body>

    <p>Sanatorio Los Arcos</p>
    <p>Quetzaltenango</p>

    <p>Fecha: <?php echo date("m-d-y");;?></p>
    <br>

    <div class="cabecera">
        <h1>HISTORIAL PACIENTE</h1>
    </div>
        <br><br>
    <div class="info">
        <center><h3>Información Personal</h3></center>
        <p><b>Nombre:   </b> {{$p->Nombres}}</p>
        <p><b>Apellidos:  </b> {{$p->Apellidos}}</p>
        <p><b>Fecha Nacimiento:  </b> {{$p->FechaNacimiento}}</p>
        <p><b>Telefono:  </b> {{$p->Telefono}}</p>
        <p><b>Peso(lbs):</b> {{$p->Peso}}</p>
        <p><b>Altura(mts):</b> {{$p->Altura}}</p>
        <p><b>Tipo Sangre:</b> {{$p->TipoSangre}}</p>
        <p><b>Sexo:</b> {{$p->Sexo}}</p>
        <center><h4>Operaciones - Observaciones</h4></center>
        <div class="form-group row">
            <div class="col-md-6 col-sm-4 mb-3 mb-sm-0">  
                <textarea name="Operaciones" id="" cols="110" rows="2" readonly>{{$p->Operaciones}}</textarea >          
            </div>
        </div>   
    </div>

    <br>
    <div class="info">    
        <center><h3>Consultas Realizadas</h3></center>
        @foreach($obs as $o)
            <p><b>Fecha: </b>{{ $o->created_at }}</p>
            <p><b>Sintomas:</b>{!! $o->Sintomas !!}</p>
            <p><b> Observaciones: </b>{!! $o->Observaciones !!}</p>
            <p>-------------------------------------------------------</p>
        @endforeach
    </div>

    <br>
    <div class="info">    
        <center><h3>Recetas</h3></center>
        @foreach($obs as $o)
            <p><b>Fecha: </b>{!! $o->Descripcion !!}</p>
            <p>-------------------------------------------------------</p>
        @endforeach
    </div>
<div>

</div>
               
</body>
</html>