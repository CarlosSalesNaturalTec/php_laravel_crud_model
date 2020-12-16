<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">

    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/solid.css') }}">
    
    <title>SESAB - LARAVEL Exemplo</title>
  </head>
  <body>

    <!-- Menu Principal -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ url('index') }}"><i class="fas fa-home"></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>   
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">       
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastros</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ url('pacientes') }}">Pacientes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('consultas') }}">Consultas</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    @yield('content')   

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>

  </body>
</html>