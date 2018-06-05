<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">  

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Promovite</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/gsdk.css')}} " rel="stylesheet" />  
  <link href="{{ asset('css/demo.css')}} " rel="stylesheet" /> 
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--     Font Awesome     -->
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  <style type="text/css">
    #menu_gral {
        font-family: verdana;
        width: 20vw;
        margin: 0 1rem;
    }
    #menu_gral ul {
        box-shadow: 0 0 3px rgba(0,0,0,.4);
        list-style-type: none; 
        text-align: center;
    }
    #menu_gral > ul li {
        background: #FFf;
    }
    #menu_gral li a {
        display: block;
        text-decoration: none;
        font-size: 1rem;
        line-height: 2.5rem;
        color: #444;
    }
    #menu_gral li:hover a, #menu_gral li a:focus {
        background: #8DA889;
        color: #fff;
    }

    #menu_gral li ul {
        position: absolute;
        width: 0;
        left: 100%;
        top: 0;
        overflow: hidden;
    }
    #menu_gral li:hover ul, #menu_gral li:focus ul {
        width: 100%;
        background:  #bbb;
        z-index: 5;
    }
    #menu_gral li li {
        display: block;
        width: 100%;
    }
    #menu_gral li:hover li a, #menu_gral li:focus li a {
        font-family: monospace;
        font-size: .9rem;
        line-height: 1.7rem;
        border-top: 1px solid #e5e5e5;
        background: #444;
    }
    #menu_gral li li a:hover, #menu_gral li li a:focus {
        background: #8AA9B8; 
    }
    .border-primary{
      border: #2CA8FF;
    }
  </style>
  </head>
  <body>
    <div id="navbar-full">
      <div class="container">
        <nav class="navbar navbar-ct-azzure navbar-transparent navbar-fixed-top" role="navigation">
          <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              </button>
              <!--<a href="">
                <div class="logo-container">
                  <div class="logo">
                    <img src="{{ asset('img/new_logo.png') }}">
                  </div>
                  <div class="brand">
                   <strong> Promovite </strong> 
                  </div>
                </div>
              </a><!-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
              <ul class="nav navbar-nav navbar-right">
                <li class="menu_gral">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <strong>Categorias</strong> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Escritura<a>
                        <ul>Plumas</ul>
                    </li>
                    <li class="divider"></li>
                     <li><a href="#">Oficina<a>
                        <ul>Engrapadoras</ul>
                    </li>
                    <li class="divider"></li>
                     <li><a href="#">Tecnologíaa<a>
                        <ul>Memorias USB</ul>
                    </li>
                    <li class="divider"></li>
                     <li><a href="#">Salud y Belleza<a>
                        <ul>Lápiz labial</ul>
                    </li>
                  </ul>
                </li>
              </ul
              
            </div><!--><!-- /.navbar-collapse -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active dropdown">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
          </div><!-- /.container-fluid -->
        </nav>
      </div><!--  end container-->
      <!--Center of image text-->
      <div class='blurred-container'>
        <div class="img-src" style="background-color: #000"></div>
        <div class='img-src blur' style="background-color: #000"></div>
      </div>
    </div> <!--End of image with text at the center-->
    <!--Productos-->
    <br>
    
    <center><div>
      <div class="card border-primary mb-3" style="max-width: 20rem;" data-toggle="modal" data-target="#myModal">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h4 class="card-title">Primary card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      </div>
    </center>

<!-- Modal -->
 
    <!--Modal-->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nombre Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="raw">
            <div class="modal-body">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Product Description
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-bo  dy">
                    Aquí va toda la información del producto
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--Fin de Modal-->





    <div>
      <!--<div class="img-src" style="background-image: url('http://get-shit-done-pro.herokuapp.com/assets/img/bg6.jpg');"></div>-->
      <div class="footer">
          <div class="col-md-12 text-center">
            <div class="credits">
              &copy; <script>document.write(new Date().getFullYear())</script> Hecho con <i class="fa fa-heart heart" alt="love"></i> Por <a href="http://handcd.com/">HAND Creative Design</a>.
            </div>
            </div>
      </div>
    </div>

</body>

      <script src="{{ asset('jquery/jquery-1.10.2.js') }}"  type="text/javascript"></script>
      <script src="{{ asset('js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>

      <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
      <script src="{{ asset('js/gsdk-checkbox.js') }}"></script>
      <script src="{{ asset('js/gsdk-radio.js') }}"></script>
      <script src="{{ asset('js/gsdk-bootstrapswitch.js')}}"></script>
      <script src="{{ asset('js/get-shit-done.js')}}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>

      <script type="text/javascript">

        $('.btn-tooltip').tooltip();
        $('.label-tooltip').tooltip();
        $('.pick-class-label').click(function(){
          var new_class = $(this).attr('new-class');  
          var old_class = $('#display-buttons').attr('data-class');
          var display_div = $('#display-buttons');
          if(display_div.length) {
            var display_buttons = display_div.find('.btn');
            display_buttons.removeClass(old_class);
            display_buttons.addClass(new_class);
            display_div.attr('data-class', new_class);
          }
        });
        $( "#slider-range" ).slider({
          range: true,
          min: 0,
          max: 500,
          values: [ 75, 300 ],
        });
        $( "#slider-default" ).slider({
          value: 70,
          orientation: "horizontal",
          range: "min",
          animate: true
        });
        $('.carousel').carousel({
          interval: 4000
        });


      </script>
</html>