<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Paciente;
use App\Consulta;

class HistorialController extends Controller
{
    //
    public function show($id)
    {
        $p = Paciente::find($id);
        $obs = DB::table('consultas')
                    ->join('recetas','recetas.ConsultaId','=','consultas.ConsultaId')
                    ->where('consultas.PacienteId','=',$id)
                    ->where('consultas.Estado','=',1)
                    ->get();
        return view('pacientes.historial')->with(compact('p','obs'));
    }

    public function print($id)
    {
        $p = Paciente::find($id);
        $obs = DB::table('consultas')
                    ->join('recetas','recetas.ConsultaId','=','consultas.ConsultaId')
                    ->where('consultas.PacienteId','=',$id)
                    ->where('consultas.Estado','=',1)
                    ->get();

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('pacientes.iHistorial',['p' => $p, 'obs'=> $obs]);
        return $pdf->stream('Receta');
    }

    public function delete($id)
    {
        $h = Consulta::find($id);
        $h->Estado = 0;
        $p = $h->PacienteId;
        $h->save();
        return redirect('/historial/'.$p);
    }
}
