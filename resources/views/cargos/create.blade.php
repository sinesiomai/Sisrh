@extends('layouts.default')

@section('title', 'Cadastrar Cargos')

@section('conteudo')
    <div class="container-fluid shadow bg-white p-4">
        <h1>Cadastrar Cargo</h1>
        <form class="row g-4" method="POST" action="{{route('cargos.store')}}">
        @csrf
        <div class="mt-5">
            <div>
                <label for="nome" class="form-label">Descrição</label>
                <input type="text" name="descricao" class="form-control form-control-lg bg-light" value="" required>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="button" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
        </form>
    </div>
@endsection