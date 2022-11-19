<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalFuncionarios = Funcionario::all()->count();
        $totalCargos = Cargo::all()->count();
        $totalDepartamentos = Departamento::all()->count();
        return view('dashboard.index', compact('totalFuncionarios', 'totalCargos', 'totalDepartamentos'));
    }
}
