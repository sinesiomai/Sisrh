<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(Request $request)
    {
        $cargos = Cargo::where('descricao','like', '%'.$request->buscaCargo.'%')->orderBy('descricao','asc')->get();
        $totalcargos = Cargo::all()->count();   
        return view('cargos.index', compact('cargos', 'totalcargos'));
    }
    
    public function create(){

        return view('cargos.create');
    }

    public function store(Request $request)
    {
        $input = $request -> toArray();
    
        Cargo::Create($input);
        
        return redirect()->route('cargos.index')->with('sucesso', 'Cargo Cadastrado com Sucesso');
    }
}
