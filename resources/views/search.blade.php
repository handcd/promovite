@extends('layouts.main')

@section('content')
  <br><br><br><br>
  <h3>Resultado de la búsqueda: <i>{{$search}}</i></h3>
  <br><br>
  @if (isset($message))
    <div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>¡Diantres!</strong> {{$message}}
    </div>
  @else
    
    <center>
    <div class="alert alert-dismissible alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <h4 class="alert-heading">¡Hola!</h4>
      <p class="mb-0">Aquí están los posibles resultados de lo que estás buscando:)</p>
    </div>
    <div class="row">
        @foreach ($articulo as $informacion)          
          <div class="col-md-3">
            <a href="{{ url('/'.$informacion->categoria.'/'.$informacion->id) }}" target="_blank" onclick="window.open(this.href, this.target, 'width = 600, height = 600, top = 50, left = 400'); return false;" class="pull-right">                                                             
            <div class="card mb-3">
              @if( $informacion->catalogo === 'PWD')
                 <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'_lrg.jpg') }}" alt="Imagen no disponible" style="height: 200px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text"> {{$informacion->descripcion }}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Precio unitario: ${{ round($informacion->precio_publico, 2) }}</li>
                </ul>
              @else
                <h4 class="card-header text-white promoopcion ">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }} </h4>  
                <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="height: 200px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text"> {{$informacion->descripcion }}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Precio unitario: ${{ round($informacion->precio_publico, 2) }}</li>
                </ul>
              @endif
            </div>   
            </a>
          </div>
        @endforeach       
    </div>    
    </center>
<br><br><br><br>
  @endif
 
@endsection