<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(Request $request)
    {
        $departamentos = Departamento::where('nome','like', '%'.$request->buscaDepartamento.'%')->orderBy('nome','asc')->get();
        $totaldepartamentos = Departamento::all()->count();   
        return view('departamentos.index', compact('departamentos', 'totaldepartamentos'));
    }

    public function create()
    {
        return view('departamentos.create');
    }

    public function store(Request $request)
    {
        $input = $request -> toArray();
    
        Departamento::Create($input);

        return redirect()->route('departamentos.index')->with('sucesso', 'Departamento Cadastrado com Sucesso');
    }
   
}