<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>

<body>
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="{{ route('departamentos.index') }}">Listar</a></li>
    <li><a href="{{ route('departamentos.create')}}">Crear</a></li>
  </ul>
  <ul id="dropdown2" class="dropdown-content">
    <li><a href="{{ route('municipios.index') }}">Listar</a></li>
    <li><a href="{{ route('municipios.create')}}">Crear</a></li>
  </ul>
  <nav>
    <div class="nav-wrapper">
        <ul>
          <li><a class="dropdown-trigger" data-target="dropdown1">Departamentos</a></li>
          <li><a class="dropdown-trigger" data-target="dropdown2">Municipios</a></li>
        </ul>
    </div>
  </nav>

  <div class="container">`
    @yield('content')
  </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".dropdown-trigger").dropdown();
        $('select').formSelect();
      });
    </script>
  </body>

</html>