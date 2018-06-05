<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('img/promovite-icon.png') }}" />
  <link rel="icon" type="image/png" href="{{ url('img/promovite-icon.png') }}" />
  <title>Promovite | Inicio</title>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
  <style>
    .navbar.bg-light {
      background-image: linear-gradient(white, #eee 50%, #e4e4e4); 
      background-repeat: no-repeat;
    }
    .footer{
      background-image: linear-gradient(white, #eee 50%, #a59f9f); 
      background-repeat: no-repeat;
      position: fixed;
      height: 50px;
      bottom: 0;
      width: 100%;
    }
    .fa-heart:before {
      color: #ff0000;
    }
    .btn-secondary {
      background-color: #414042; 
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-liht bg-light">
    <a class="navbar-brand" href="#"><img style="max-width:100px; margin-top: -10px;" src="{{ url('img/promovite-logo.png') }}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03" aria-label="Button group with nested dropdown">
      <ul class="navbar-nav mr-auto dropdown">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-home"></i> Inicio</a>
        </li>
        <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">Categorias</a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                  <li><a href="#">Inbox</a></li>
                  <li><a href="#">Drafts</a></li>
                  <li><a href="#">Sent Items</a></li>
                  <li><a href="#">Trash</a></li>
              </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">Novedades</a>
              <ul class="dropdown-menu">
                  <li><a href="#">Inbox</a></li>
                  <li><a href="#">Drafts</a></li>
                  <li><a href="#">Sent Items</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Trash</a></li>
              </ul>
        </li>
        <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">Nosotros</a>
              <ul class="dropdown-menu">
                  <li><a href="#">Inbox</a></li>
                  <li><a href="#">Drafts</a></li>
                  <li><a href="#">Sent Items</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Trash</a></li>
              </ul>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 pull-right">
        <input class="form-control mr-lg-2" type="text" placeholder="Escritura, tecnología, etc...">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Busca</button>
      </form>
    </div>
  </nav>
  
  @section('content')

  
  <div class="footer">
      <div class="col-md-12 text-center">
        <div class="credits">
          &copy; <script>document.write(new Date().getFullYear())</script> Hecho con <i class="fa fa-heart heart" alt="love"></i> Por <a href="http://handcd.com/">HAND Creative Design</a>.
         </div>
      </div>
  </div>
</body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>