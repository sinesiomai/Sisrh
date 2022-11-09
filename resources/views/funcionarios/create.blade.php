@extends('layouts.default')

@section('title', 'Cadastrar Funcionário')

@section('conteudo')
    <div class="container-fluid shadow bg-white p-4">
        <h1>Cadastrar Funcionário</h1>
        <form class="row g-4" method="POST" action="{{route('funcionarios.store')}}" 
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="1" name="id_user">
        <div class="row mt-5 mb-4">
            <div class="col">
                <div>
                    <label for="nome" class="form-label fw-bold">Nome</label>
                    <input type="text" name="nome" class="form-control form-control-lg bg-light" value="" required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="data_nasc" class="form-label fw-bold">Data de Nascimento</label>
                    <input type="date" name="data_nasc" class="form-control form-control-lg bg-light" value=""
                        required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="sexo" class="form-label fw-bold">Sexo</label>
                    <select name="sexo" id="sexo" class="form-select form-select-lg bg-light" required>
                        <option value="">--</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div>
                    <label for="cpf" class="form-label fw-bold">CPF</label>
                    <input type="text" name="cpf" class="form-control form-control-lg bg-light" value=""
                        required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="email" class="form-label fw-bold">E-mail</label>
                    <input type="text" name="email" class="form-control form-control-lg bg-light" value=""
                        required>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="telefone" class="form-label fw-bold">Telefone</label>
                    <input type="text" name="telefone" class="form-control form-control-lg bg-light" value=""
                    placeholder="(DDD) XXXXX-XXXX"    required>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div>
                    <label for="departamento" class="form-label fw-bold">Departamento</label>
                    <select name="id_departamento" class="form-select form-select-lg" aria-label=".form-select-lg example">
                        @foreach ($departamentos as $departamento )
                        <option value="{{ $departamento -> id }}">{{ $departamento->nome }}</option>
                        @endforeach
                    </select>    
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="cargo" class="form-label fw-bold">Cargo</label>
                    <select  name="id_cargo" class="form-select form-select-lg" aria-label=".form-select-lg example">
                        @foreach ($cargos as $cargo )
                        <option value="{{ $cargo -> id }}">{{ $cargo->descricao }}</option>                
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="salario" class="form-label fw-bold">Salário</label>
                    <input type="text" name="salario" class="form-control form-control-lg bg-light" value=""
                    placeholder="R$" required>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label fw-bold">Foto</label>
            <input class="form-control" type="file" id="formFile" name="foto">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="{{ route('funcionarios.index') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </div>
</form>
@endsection
