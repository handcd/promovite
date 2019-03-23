@extends('layouts.main')

@section('content')
  <br>
  <h3>Resultado de la búsqueda: <i>{{$search}}</i></h3>
  <br><br>
  @if (isset($message))
    <div class="alert alert-dismissible alert-danger">
     <h1 class="alert-heading">Al parecer lo que buscas no lo tenemos o lo hemos perdido. </h1> {{$message}}
    </div>
  @else
    
    <center>
    <div class="alert alert-dismissible alert-success">
      <h1 class="alert-heading">Aquí están los posibles resultados de lo que estás buscando:)</h1>
      <p class="mb-6"></p>
    </div>
    <div class="row">
        @foreach ($articulo as $informacion)          
          <div class="col-md-4">
            <a href="{{ url('/'.$informacion->categoria.'/'.$informacion->id) }}" target="_blank" onclick="window.open(this.href, this.target, 'width = 600, height = 600, top = 50, left = 400'); return false;" class="pull-right">                                                             
            <div class="card mb-3">
              @if( $informacion->catalogo === 'PWD')
                 <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'_lrg.jpg') }}" alt="Imagen no disponible" style="max-height: 300px; display: block;">
                <div class="card-body">
                  <p class="card-text"> {{$informacion->descripcion }}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Precio unitario: ${{ round(1.18 * (0.79 * $informacion->precio_distribuidor),2) }}</li>
                </ul>
              @elseif($informacion->catalogo === 'PMD')
                <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'-'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                <div class="card-body">
                  <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Precio unitario: ${{ round($informacion->precio_publico, 2) }}</li>
                </ul>
              @elseif($informacion->catalogo === 'PPM' || $informacion->catalogo === 'PIN')
                <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                <div class="card-body">
                  <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Precio unitario: ${{ round(($informacion->precio_distribuidor*1.15), 2) }} </li>
                </ul>
              @elseif($informacion->catalogo === 'PPO')
                <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                <div class="card-body">
                  <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                </div>
                @if($informacion->categoria === 'Tecnologia')
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Precio unitario: ${{ round((0.90*$informacion->precio_distribuidor*1.11), 2) }} </li>
                  </ul>
                @else
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Precio unitario: ${{ round((0.90*$informacion->precio_distribuidor*1.175), 2) }} </li>
                  </ul>
                @endif
              @elseif($informacion->catalogo === 'PCD')
                <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">

                <div class="card-body">
                  <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Precio unitario: ${{ round(($informacion->precio_distribuidor*1.13), 2) }} </li>
                </ul>
              @elseif($informacion->catalogo === 'PSL')
                  <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                  <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.strtoupper($informacion->color).'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                  <div class="card-body">
                    <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Precio unitario: $  {{ round($informacion->precio_publico,2) }}</li>
                  </ul>
              @elseif($informacion->catalogo === 'PFP')
                  <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                  <img src="{{ asset('img/'.$informacion->catalogo.'/'.$informacion->modelo.'_'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                  <div class="card-body">
                    <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Precio unitario: ${{ round($informacion->precio_publico, 2) }}</li>
                  </ul>
              @elseif($informacion->catalogo === 'PPF')
                  <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                  @if($informacion->codigo_color == NULL && $informacion->color == NULL)
                    <img src="{{ asset('img/'.$informacion->catalogo.'/'.$informacion->modelo.'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                  @else
                    <img src="{{ asset('img/'.$informacion->catalogo.'/'.$informacion->modelo.'-'.$informacion->codigo_color.'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                  @endif               
                  <div class="card-body">
                    <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Consultar el precio con su agente de ventas</li>
                  </ul>
              @else
                <h4 class="card-header text-white winideas ">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }} </h4>  
                <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="max-height: 300px;display: block;">
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