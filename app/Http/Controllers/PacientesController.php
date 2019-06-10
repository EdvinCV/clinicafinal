<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Paciente;

class PacientesController extends Controller
{
    //
    public function index()
    {
        $pacientes = DB::table('pacientes')
                        ->where('pacientes.Estado','=',1)
                        ->paginate(5);
        return view('pacientes.index')->with(compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        $paciente = new Paciente();
        $paciente->Nombres = $request->input('Nombres');
        $paciente->Apellidos = $request->input('Apellidos');
        $paciente->FechaNacimiento = $request->input('FechaNacimiento');
        $paciente->Telefono = $request->input('Telefono');
        $paciente->Peso = $request->input('Peso');
        $paciente->Altura = $request->input('Altura');
        $paciente->TipoSangre = $request->input('TipoSangre');
        $paciente->Operaciones = $request->input('Operaciones');
        $paciente->Sexo = $request->input('Sexo');
        $paciente->save();

        return redirect()->action('PacientesController@index');

    }

    public function search(Request $req)
    {
        $nombre = $req->get('search');
        $pacientes = DB::table('pacientes')->where('Nombres', 'like', '%'.$nombre.'%')->orWhere('Apellidos', 'like', '%'.$nombre.'%')->paginate(5);
        return view('pacientes.index')->with(compact('pacientes'));
    }

    public function info($id)
    {
        $p = Paciente::find($id);
        return view ('pacientes.info')->with(compact('p'));
    }

    public function update($id, Request $request)
    {
        $paciente = Paciente::find($id);
        $paciente->Nombres = $request->input('Nombres');
        $paciente->Apellidos = $request->input('Apellidos');
        $paciente->FechaNacimiento = $request->input('FechaNacimiento');
        $paciente->Telefono = $request->input('Telefono');
        $paciente->Peso = $request->input('Peso');
        $paciente->Altura = $request->input('Altura');
        $paciente->TipoSangre = $request->input('TipoSangre');
        $paciente->Operaciones = $request->input('Operaciones');
        $paciente->Sexo = $request->input('Sexo');
        $paciente->save();

        return redirect()->action('PacientesController@index');        
    }

    public function delete($id)
    {
        $paciente = Paciente::find($id);
        $paciente->Estado = 0;
        $paciente->save();
        return redirect()->action('PacientesController@index');
    }

    

}
