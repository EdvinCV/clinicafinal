<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consulta;
use App\Paciente;
use App\Receta;
use Auth;
use Illuminate\Support\Facades\DB;

class ConsultasController extends Controller
{
    //
    public function index()
    {

    }

    public function create($id)
    {
        $p = Paciente::find($id);
        $obs = DB::table('consultas')
                    ->join('recetas','recetas.ConsultaId','=','consultas.ConsultaId')
                    ->where('consultas.PacienteId','=',$id)
                    ->where('consultas.Estado','=',1)
                    ->get();
        return view('consultas.create')->with(compact('p','obs'));
    }

    public function store(Request $request)
    {
        $consulta = new Consulta();
        $consulta->Sintomas = $request->input('Sintomas');
        $consulta->Observaciones = $request->input('Observaciones');
        $consulta->MedicoId = auth()->user()->id;
        $consulta->Estado = 1;
        $consulta->PacienteId = $request->input('PacienteId');
        $consulta->save();

        $consultas = Consulta::all();
        $final = $consultas->last();
        
        $receta = new Receta();
        $receta->ConsultaId = $final->ConsultaId;
        $receta->Descripcion = $request->input('Descripcion');
        $receta->Estado = 1;
        $receta->save();


        return redirect()->action('PacientesController@index');        


    }
}
