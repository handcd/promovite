<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('img/promovite-icon.png') }}" />
  <link rel="icon" type="image/png" href="{{ url('img/promovite-icon.png') }}" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <title>Promovite | {{ $titulo }} </title>
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  {{-- Search console --}}
  <meta name="google-site-verification" content="XTDJlOeAKLqNatKgSShFBMCD4oeSCNl0sUNiKmJTxpk" />

  <style type="text/css">
    .fa-heart:before {
      color: #ff0000;
    }
    .footer .credits {
      margin-top: 25px;
      padding: 20px 0 15px;
      position: fixed;
      bottom: 0px;
      width: 100%;
      height: 40px;
      z-index: 200;
      background-color: white;
    }
    .winideas {
      background-color: #00aeef;
    }
    .promoopcion {
      background-color: #ffffff;
    }
    .promoline {
      background-color: #ffeeff;
    }

    a{
      text-decoration: none;
    }
    .barra{
      bottom:0;      
      margin-bottom: 3rem;
    }
    .fondo{
      background-image: url(img/fondo4.jpg);
      height: 100%;
      width: 100%;
    }
  </style> 
  
</head>
<body class="fondo">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/')}}"><img style="max-width:100px; margin-top: -10px;" src="{{ url('img/promovite-logo.png') }}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="true" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarColor03" style="">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}" style="padding-top: 25px;">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link" style="padding-top: 25px;">Categorias</a>
                <ul class="dropdown-menu" aria-labelledby="themes" style="background-color: white;">
                    <li><a href="{{ url('/Escritura y mas') }}" >Escritura</a></li>
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
          <a class="nav-link" href="{{url('/nosotros')}}" style="padding-top: 25px;">Nosotros</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" role="search" action="{{ url('/searchredirect') }}">
        <input class="form-control mr-sm-2" type="text" placeholder="Ingresa un modelo" name="search" id="search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
  
  <div class="container">
    <section class="contenido">
      @yield('content')
    </section>
  </div>
  <br>
  @if($titulo !== 'Bienvenido')
  <div class="footer">
    <div class="col-md-12 text-center">
        <div class="credits" style="padding: 0px; height: 80px;">
          <h6>Calle 23, #111, Col. San Pedro de los Pinos, CP. 03800, Ciudad de México, Benito Juárez | Tel. 5545219956 | ventas@promovite.com.mx</h6>  
        </div>
      </div>
  </div>
  @endif
  
  <div class="barra">
    <div class="text-center" style="padding-bottom: 80px;">          
      <h6>
        &copy; <script>document.write(new Date().getFullYear())</script> Hecho con <i class="fa fa-heart heart" alt="love"></i> Por<a href="http://handcd.com/">HAND Creative Design</a>.</h6>
    </div>
  </div>
  
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>