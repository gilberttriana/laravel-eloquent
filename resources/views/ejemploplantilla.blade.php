<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
    <style>
        body {
          padding-top: 5rem;
            background-color: purple;
            background-image: linear-gradient(to right, purple,blue, green);
        }
        .dropdown-menu {
            background-color: #343a40;
        }
        .dropdown-item {
            color: #ffffff; 
        }
        .alert-info {
            background-color: #17a2b8;
            color: #ffffff; 
        }
        .btn-secondary {
            background-color: #6c757d; 
            border-color: #6c757d;
        }
            /* Estilo para centrar el botón */
    .button-container {
        display: flex;
        justify-content: center;
    }

        
    </style>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

        <div class="container">
                <div class="row">
                  <div class="col-sm-2">
                        <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Trabajo
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="{{ route('profesor.create') }}">Profesores</a>
                                  <a class="dropdown-item" href="{{ route('profesor.index') }}">listar Profesores</a>
                                  <a class="dropdown-item" href="{{ route('aula.create') }}">Aulas</a>
                                  <a class="dropdown-item" href="{{ route('aula.index') }}">listar Aulas</a>
                                  <a class="dropdown-item" href="{{ route('clase.create') }}">Cursos</a>
                                  <a class="dropdown-item" href="{{ route('clase.index') }}">listar Cursos</a>
                                </div>
                            </div>
                  </div>
                  <div class="col-sm-10 alert alert-info" role="alert">
                      @yield('contenido')
                  </div>
                </div>
        </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
</html>