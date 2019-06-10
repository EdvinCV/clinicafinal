<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Medicamento;

class MedicamentoController extends Controller
{
    //
    public function index()
    {
        $medicamentos = DB::table('medicamentos')->paginate(5);
        return view('medicamentos.index')->with(compact('medicamentos'));
    }

    public function search(Request $req)
    {
        $nombre = $req->get('search');
        $medicamentos = DB::table('medicamentos')->where('NombreMedicamento', 'like', '%'.$nombre.'%')->orWhere('Descripcion', 'like', '%'.$nombre.'%')->paginate(5);
        return view('medicamentos.index')->with(compact('medicamentos'));
    }

    public function create()
    {
        return view('medicamentos.create');
    }

    public function store(Request $req)
    {
        $med = new Medicamento();
        $med->NombreMedicamento = $req->input('Nombre');
        $med->Descripcion = $req->input('Descripcion');
        $med->Marca = $req->input('Marca');
        $med->Precio = $req->input('Precio');
        $med->save();
        return redirect()->action('MedicamentoController@index');

    }
}
