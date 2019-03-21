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
      background-color: #eeeeee;
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

    a:link{
      text-decoration: none;
    }
    .barra{
      bottom:0;      
      margin-bottom: 3rem;
    }
    .fondo{
      background-image: url(/img/fondo4.jpg);
      height: 100%;
      width: 100%;
    }
  </style> 
  
</head>
<body class="fondo">
  <div class="footer">
    <div class="col-md-12 text-center">
      <div class="credits" style="padding: 0px; top: 0px; left: 0px; margin-top: 0px;">
        <h6 style="margin-top: 8px;"><i class="fa fa-phone-volume" alt="phone"></i> Tel. 5545219956 | <i class="fa fa-envelope" alt="envelope"></i> ventas@promovite.com.mx</h6>  
      </div>    
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="top: 40px;">
    <a class="navbar-brand" href="{{ url('/')}}"><img style="max-width:100px; margin-top: -10px;" src="{{ url('img/promovite-logo.png') }}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="true" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarColor03" style="">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}" style="padding-top: 25px;">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link" style="padding-top: 25px;">Categorias</a>
                <ul class="dropdown-menu" aria-labelledby="themes" style="background-color: white; width: 332px;">
                    <a href="{{ url('/Escritura y mas') }}">
                      <li style="margin-left: 10px; margin-top: 5px;" onmouseover="this.style.backgroundColor='#00aeef'" onmouseout="this.style.backgroundColor='#FFFFFF'">
                        <i class="far fa-edit" style="margin-right: 13px;"></i> Escritura
                      </li>
                    </a>
                    <a href="{{ url('/Oficina') }}">
                      <li style="margin-left: 10px; margin-top: 5px;" onmouseover="this.style.backgroundColor='#00aeef'" onmouseout="this.style.backgroundColor='#FFFFFF'">
                        <i class="fa fa-briefcase" style="margin-right: 13px;"></i>  Oficina
                      </li>
                    </a>
                    <a href="{{ url('/Kids') }}">
                      <li style="margin-left: 10px; margin-top: 5px;" onmouseover="this.style.backgroundColor='#00aeef'" onmouseout="this.style.backgroundColor='#FFFFFF'">
                        <i class="fas fa-child" style="margin-right: 17px;"></i>  Kids
                      </li>
                    </a>
                    <a href="{{ url('/Tecnologia') }}">
                      <li style="margin-left: 10px; margin-top: 5px;" onmouseover="this.style.backgroundColor='#00aeef'" onmouseout="this.style.backgroundColor='#FFFFFF'">
                        <i class="fa fa-laptop" style="margin-right: 10px;"></i>  Tecnología
                      </li>
                    </a>
                    <a href="{{ url('/Llaveros, linternas y herramie') }}">
                      <li style="margin-left: 10px; margin-top: 5px;" onmouseover="this.style.backgroundColor='#00aeef'" onmouseout="this.style.backgroundColor='#FFFFFF'">
                        <i class="fa fa-tools" style="margin-right: 15px;"></i>  Llaveros, linternas y herrámientas
                      </li>
                    </a>
                    <a href="{{ url('/Salud y belleza') }}">
                      <li style="margin-left: 10px; margin-top: 5px;" onmouseover="this.style.backgroundColor='#00aeef'" onmouseout="this.style.backgroundColor='#FFFFFF'">
                        <i class="fa fa-briefcase-medical" style="margin-right: 15px;"></i>  Salud y belleza
                      </li>
                    </a>
                    <a href="{{ url('/Bolsas, maletas y textiles') }}">
                      <li style="margin-left: 10px; margin-top: 5px;" onmouseover="this.style.backgroundColor='#00aeef'" onmouseout="this.style.backgroundColor='#FFFFFF'">
                        <i class="fa fa-shopping-bag" style="margin-right: 15px;"></i>  Bolsas, maletas y textiles
                      </li>
                    </a>
                    <a href="{{ url('/Tazas, termos y cilindros') }}">
                      <li style="margin-left: 10px; margin-top: 5px;" onmouseover="this.style.backgroundColor='#00aeef'" onmouseout="this.style.backgroundColor='#FFFFFF'">
                        <i class="fas fa-mug-hot" style="margin-right: 15px;"></i>  Tazas, termos y cilindros</a>
                      </li>
                    </a>
                    <a href="{{ url('/Hogar y estilo de vida') }}">
                      <li style="margin-left: 10px; margin-top: 5px;" onmouseover="this.style.backgroundColor='#00aeef'" onmouseout="this.style.backgroundColor='#FFFFFF'">
                        <i class="fa fa-home" style="margin-right: 15px;"></i>  Hogar y estilo de vida
                      </li>
                    </a>
                    <a href="{{ url('/Sublimacion') }}"> 
                      <li style="margin-left: 10px; margin-top: 5px;" onmouseover="this.style.backgroundColor='#00aeef'" onmouseout="this.style.backgroundColor='#FFFFFF'">
                        <i class="fa fa-highlighter" style="margin-right: 15px;"></i>  Sublimación
                      </li>
                    </a>
                    <a href="{{ url('/Viaje y recreacion') }}">
                      <li style="margin-left: 10px; margin-top: 5px;" onmouseover="this.style.backgroundColor='#00aeef'" onmouseout="this.style.backgroundColor='#FFFFFF'">
                        <i class="fa fa-plane-departure" style="margin-right: 15px;"></i>  Viaje y recreación
                      </li>
                    </a>
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
  <br><br>
  <div class="container">
    <section class="contenido">
      @yield('content')
    </section>
  </div>
  <br>
  @if($titulo !== 'Bienvenido')
  <div class="barra">
    <div class="text-center">          
      <h6>&copy; <script>document.write(new Date().getFullYear())</script> Hecho con <i class="fa fa-heart heart" alt="love"></i> Por <a href="http://handcd.com/" target="_blank">HAND Creative Design</a>.</h6>
    </div>
  </div>
  @endif
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>