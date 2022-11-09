<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/images/layout/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
          <a href="/"><img src="/images/layout/logo_white.png" height="30" alt="Sis.RH"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item px-3">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item px-3 dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Funcionários</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('funcionarios.create') }}" class="dropdown-item">Cadastrar Novo</a></li>
                    <li><a href="{{ route('funcionarios.index') }}" class="dropdown-item">Lista de Funcionários</a></li>
                    <li><hr class='dropdown-divider'/></li>
                    @foreach ($departamentos as $departamento)
                    <li><a href="" class="dropdown-item">{{ $departamento->nome }}</a></li>                     
                    @endforeach

                </ul>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link" href="{{route('cargos.index')}}">Cargos</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link" href="{{route('departamentos.index')}}">Departamento</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link" href="#">Usuários</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container mb-3 p-4 bg-white shadow-sm position-relative"> 
        @yield('conteudo')
      </div>

      <footer class="container-fluid bg-light p-3 text-center">
        <span>
            Sistema desenvolvido na aula de Programação Avançada do curso de Sistemas de Informação <br>
            Periódo Letivo: 2022.2 <br>
            Centro Universitário UniRios 
        </span>
      </footer>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>