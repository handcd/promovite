@extends('layouts.main')
@section('content')
  <style type="text/css">
   
    .container {
      position: relative;
      width: 100%;
    }

    .image {
      display: block;
      width: 100%;
      height: auto;
    }

    .overlay {
      position: absolute;
      bottom: 100%;
      left: 0;
      right: 0;
      overflow: hidden;
      width: 100%;
      height:0;
      transition: .5s ease;
    }

    .container:hover .overlay {
      bottom: 0;
      height: 100%;
    }

    .text {
      white-space: nowrap; 
      color: white;
      font-size: 20px;
      position: absolute;
      overflow: hidden;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
    }
  </style>
  <br><br><br>
  <div class="text-center">
    <img src="{{ asset('img/landing/header-11.jpg')}}" class="img-rounded" style=" width: 100%; display: block;">
  </div>
  <br><br>
  <div class="text-center">
    <h3>
      Empresa 100% Mexicana dedicada a la fabricación, <br>
      importación, comercialización, distribución y venta de <br>
      artículos promocionales y publicitarios
    </h3>
  </div>
  <br><br>
  <div class="text-center">
    <b>NOVEDADES</b>
    <div class="row">
      <div class="col-md-12">          
          <div class="col-sm-4">                                                
            <div class="card mb-4">
              <h3 class="card-header text-white escritura"> TECNOLOGÍA </h3>  
              <img src="{{ asset('img/landing/novedades1.png') }}" class="img-thumbnail" style="width: 100%; display: block;" />    
            </div>  
          </div>
          <div class="col-sm-4">                                                
            <div class="card mb-4">
              <h3 class="card-header text-white escritura"> HOGAR </h3>  
              <img src="{{ asset('img/landing/novedades2.png') }}" class="img-thumbnail" style="width: 100%; display: block;" />    
            </div>  
          </div>
          <div class="col-sm-4">                                                
            <div class="card mb-4">
              <h3 class="card-header text-white escritura"> OFICINA </h3> 
              <img src="{{ asset('img/landing/novedades3.png') }}" class="img-thumbnail" style="width: 100%; display: block;" />     
            </div>  
          </div>
      </div>        
    </div>   
  </div>
  <div class="container">
    <img src="{{ asset('img/landing/footer.jpg') }}" class="image">
    <div class="overlay">
      <div class="text"><h5>Al ser fabricantes, tenemos todo <br> el proceso de producción en <br> nuestras manos</h5></div>
    </div>
  </div>
  <br>
  <div>
    <b>NUESTROS SERVICIOS</b>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-3 text-white" style="background-color: red; height: 150px"><br><br>Bordados </div>
    <div class="col-sm-3 text-white" style="background-color: #8bc43f; height: 150px"><br><br>Serigrafía</div>
    <div class="col-sm-3 text-white" style="background-color: #f9a722; height: 150px"><br><br>Tampografía</div>
    <div class="col-sm-3 text-white" style="background-color: #404042; height: 150px"><br><br>Grabado con punta diamante</div>
    <div class="col-sm-3 text-white" style="background-color: #00adef; height: 150px"><br><br>Grabado láser</div>
    <div class="col-sm-3 text-white" style="background-color: #ff00ff; height: 150px"><br>Grabado en bajo relieve </div>
    <div class="col-sm-3 text-white" style="background-color: #93278f; height: 150px"><br><br>Hot stamping</div>
    <div class="col-sm-3 text-white" style="background-color: #000000; height: 150px"><br><br>Área de diseño</div>   
  </div>
  <br><br>
  <div class=" container color-sm-3 text-white" style="width: 100%">
      <img src="{{ asset('img/landing/contacto.jpg') }}" class="image">
      <div class="overlay">
        <div class="text">
          <p>ESTAMOS PARA SERVIRLE</p>
          <br><br><br><br><br>
          <button type="button" class="btn btn-outline-primary text-white"><p>CONTÁCTANOS</p></button>
        </div>
      </div> 
    </div> 
  <br><br><br>
@endsection  