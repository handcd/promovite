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
    	<img src="{{ asset('img/nosotros/header.jpg')}}" class="img-rounded" style=" width: 100%; display: block;">
  	</div>
  	<br><br>
  	<div class="text-center">
    	<h4>
      	Empresa 100% Mexicana dedicada a la fabricación, importación, comercialización, distribución y venta de artículos promocionales y publicitarios desde el año 1998. <br><br>
      	Actualmente contamos con dos tiendas, una ubicada en CDMX y otra en Puebla, un taller de costura en San Antonio Abad y un taller de acabado en Isabel la Católica. <br><br>
      	Además de los productos de línea que se muestran en nuestro catálogo, INTRA tiene el área de producción donde elaboramos productos de impresión y papelería, productos textiles como maletas, chamarras, uniformes, etc, así como todo lo textil para cubrir cualquier exigencia de nuestros clientes. <br><br>
      	Dicha área de Producción, combinada con el área de importación y distribución, permite que podamos cubrir gran parte de las exigencias de nuestros clientes para cumplir sus proyectos. <br><br><br>
    	</h4>
  	</div>
  	<div class="col-sm-12 text-white" style="background-color: #00adef; height: 80px">
  		<br><strong>ALGUNOS DE NUESTROS CLIENTES</strong>
  	</div>
  	<br>
  	<div class="row">
	  	<div class="col-sm-4"><img src="{{ asset('img/nosotros/chopo.png')}}" class="img-rounded" style=" width: 100%; display: block;"></div>
	    <div class="col-sm-4"><img src="{{ asset('img/nosotros/citibanamex.png')}}" class="img-rounded" style=" width: 100%; display: block;"></div>
	    <div class="col-sm-4"><img src="{{ asset('img/nosotros/cocacola.png')}}" class="img-rounded" style=" width: 100%; display: block;"></div>	 
	    <div class="col-sm-4"><img src="{{ asset('img/nosotros/berol.png')}}" class="img-rounded" style=" width: 100%; display: block;"></div>
	    <div class="col-sm-4"><img src="{{ asset('img/nosotros/jumex.png')}}" class="img-rounded" style=" width: 100%; display: block;"></div>
	    <div class="col-sm-4"><img src="{{ asset('img/nosotros/lasalle.png')}}" class="img-rounded" style=" width: 100%; display: block;"></div>
	    <div class="col-sm-4"><img src="{{ asset('img/nosotros/dominos.png')}}" class="img-rounded" style=" width: 50%; display: block;"></div>
	    <div class="col-sm-4"><img src="{{ asset('img/nosotros/radiocentro.png')}}" class="img-rounded" style=" width: 50%; display: block;"></div>
	    <div class="col-sm-4"><img src="{{ asset('img/nosotros/fiestaamericana.png')}}" class="img-rounded" style=" width: 50%; display: block;"></div>
  	</div>
  	<br><br>
  	<div class=" container text-white" style="width: 100%">
      <img src="{{ asset('img/landing/contacto.jpg') }}" class="image">
      <div class="overlay">
        <div class="text">
          <h5>ESTAMOS PARA SERVIRLE, CONTÁCTENOS</h5><br>
          <a href="http://www.facebook.com/promovite" class="btn btn-outline-primary text-white" ><i class="fab fa-facebook"></i></a>
          <a href="#" class="btn btn-outline-primary text-white" ><i class="fab fa-linkedin"></i></a>
          <a href="http://www.instagram.com/promovite" class="btn btn-outline-primary text-white" ><i class="fab fa-instagram"></i></a>
        </div>
      </div> 
   	</div> 
  	<br><br>
  	<div class="text-center">
  		Calle 23, #111, Col. San Pedro de los Pinos, CP. 03800, Ciudad de México, Benito Juárez
  		<br>
  		Tel. 
  	</div>
  	<br><br><br>
@endsection 