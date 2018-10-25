<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">-->
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('img/promovite-icon.png') }}" />
  <link rel="icon" type="image/png" href="{{ url('img/promovite-icon.png') }}" />
  <title>Promovite | {{ $titulo }} </title>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />

   
  <style>
    {{-- Estilos para navbar & footer --}}
    .navbar.bg-light {
      background-image: linear-gradient(white, #eee 50%, #e4e4e4); 
      background-repeat: no-repeat;
      width: 100%;
      height: 60px;
      position: fixed;
      z-index: 200;
    }
    .footer{
      background-image: linear-gradient(white, #eee 50%, #a59f9f); 
      background-repeat: no-repeat;
      position: fixed;
      height: 60px;
      bottom: 0;
      width: 100%;
    }
    .fa-heart:before {
      color: #ff0000;
    }
    .btn-secondary {
      background-color: #414042; 
    }
    {{-- Estilos para botones view --}}
    .fa-eye:before {
      color: #00aeef;
    }
    .button {
      background-color: #FFFFFF;
      border: none;
      color: white;
      padding: 5px 5px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 4px;
      cursor: pointer;
    }
    {{-- Estilos para tarjetas --}}
    .escritura {
      background-color: #00aeef;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-liht bg-light">
    <a class="navbar-brand" href="#"><img style="max-width:100px; margin-top: -10px;" src="{{ url('img/promovite-logo.png') }}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03" aria-label="Button group with nested dropdown">
      <ul class="navbar-nav mr-auto dropdown">
        <li class="nav-item">
          <a class="nav-link" href=" {{ url('/') }}"><i class="fa fa-home"></i> Inicio</a>
        </li>
        <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">Categorias</a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                  <li><a href="{{ url('/Escritura y mas') }}">Escritura</a></li>
                  <li><a href="{{ url('/Oficina') }}">Oficina</a></li>
                  <li><a href="{{ url('/Kids') }}">Kids</a></li>
                  <li><a href="{{ url('/Tecnologia') }}">Tecnología</a></li>
                  <li><a href="{{ url('/Llaveros, linternas y herramie') }}">Llaveros, linternas y herrámientas</a></li>
                  <li><a href="{{ url('/Salud y belleza') }}">Salud y belleza</a></li>
                  <li><a href="{{ url('/Bolsas, maletas y textiles') }}">Bolsas, maletas y textiles</a></li>
                  <li><a href="{{ url('/Tazas, termos y cilindros') }}">Tazas, termos y cilindros</a></li>
                  <li><a href="{{ url('/Hogar y estilo de vida') }}">Hogar y estilo de vida</a></li>
                  <li><a href="{{ url('/Sublimacion') }}">Sublimación</a></li>
                  <li><a href="{{ url('/Viaje y recreacion') }}">Viaje y recreación</a></li>
              </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a>
        </li>
        
        <!--<li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">Novedades</a>
              <ul class="dropdown-menu">
                  <li><a href="#">Inbox</a></li>
                  <li><a href="#">Drafts</a></li>
                  <li><a href="#">Sent Items</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Trash</a></li>
              </ul>
        </li>-->
      </ul>
      <form class="form-inline my-2 my-lg-0 pull-right" role="search" action="{{ url('/searchredirect') }}">
        <center>
        <input class="form-control mr-lg-2" type="text" style="width: 300px" placeholder="Ingrese un modelo o subcategóría" name="search" id="search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
        </center>
      </form>
    </div>
  </nav>
  
  <div class="container">
    <span class="ir-arriba fa fa-angle-up"></span>
    <center>
    <section class="contenido">
      @yield('content')
    </section>
    </center>
    

  </div>
  <div class="footer">
      <div class="col-md-12 text-center">
        <div class="credits">
          <br>
          <h5 class="pull-left">
          &copy; <script>document.write(new Date().getFullYear())</script> Hecho con <i class="fa fa-heart heart" alt="love"></i> Por <a href="http://handcd.com/">HAND Creative Design</a>.</h5>
         </div>
      </div>
  </div>
  
</body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</html>