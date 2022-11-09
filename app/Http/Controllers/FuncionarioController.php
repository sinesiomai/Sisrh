<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{   
    public function index(Request $request)
    {  
        // dd($request);
        $funcionarios = Funcionario::where('nome', 'like', '%'.$request->buscaFuncionario.'%')->orderBy('nome','asc')->get();
        $totalFuncionarios = Funcionario::all()->count();                          
        return view('funcionarios.index', compact('funcionarios', 'totalFuncionarios'));
    }

    public function departamento($id, Request $request)
    {
        $departamento = Departamento::find($id);

        $funcionarios = Funcionario::where('id_departamento', $id)
        ->where('nome', 'like', '%'.$request->buscaFuncionario.'%')
        ->orderBy('nome','asc')->get();

        $totalFuncionarios = Funcionario::where('id_departamento', $id)->count();                          
        return view('funcionarios.index', compact('funcionarios', 'totalFuncionarios', 'departamento'));
    }


    public function create()
    {
        $departamentos = Departamento::all()->sortBy('nome');
        $cargos = Cargo::all()->sortBy('descricao');
        return view('funcionarios.create', compact('departamentos', 'cargos'));
    }

    public function store(Request $request)
    {
        $input = $request -> toArray();
        if(!empty($input['foto'] && $input['foto']->isValid() ))
        {
            $nomeArquivo = $input['foto']->hashName(); // Obtem a hash do nome do arquivo
            $input['foto']->store('public/images/funcionarios'); // Faz upload da foto em uma pasta
            $input['foto'] = $nomeArquivo; // Guardr o nome do arquivo 
        }else{
            $input['foto'] = null;
        }

        Funcionario::Create($input);

        return redirect()->route('funcionarios.index')->with('sucesso', 'Funcionário Cadastrado com Sucesso');
    }
}
