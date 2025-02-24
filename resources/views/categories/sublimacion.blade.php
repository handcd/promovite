@extends('layouts.main')
@section('content')
  <center>
    <div class="row">
      @foreach ($sublimacion as $informacion)
        <div class="col-md-4">
            <a href="{{ url('/'.$informacion->categoria.'/'.$informacion->id) }}" target="_blank" onclick="window.open(this.href, this.target, 'width = 600, height = 600, top = 50, left = 400'); return false;" class="pull-right">
            <div class="card mb-3">
              @switch($informacion->catalogo)
                @case('PWD')
                  <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                  <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'_lrg.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                  <div class="card-body">
                    <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Precio unitario: $  {{ number_format(round(1.18 * (0.79 * $informacion->precio_distribuidor),3),2) }}</li>
                  </ul>
                  @break
                @case('PSL')
                  <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                  <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.strtoupper($informacion->color).'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                  <div class="card-body">
                    <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Precio unitario: $  {{ number_format(round($informacion->precio_publico,3),2) }}</li>
                  </ul>
                  @break
                @case('PPF')
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
                  @break
                @case('PMD')
                  <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                  <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'-'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                  <div class="card-body">
                    <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Precio unitario: ${{ number_format(round($informacion->precio_publico, 3),2) }}</li>
                  </ul>
                  @break
                @case('PFP')
                  <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                  <img src="{{ asset('img/'.$informacion->catalogo.'/'.$informacion->modelo.'_'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                  <div class="card-body">
                    <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Precio unitario: ${{ number_format(round(1.10 * $informacion->precio_distribuidor, 3),2) }}</li>
                  </ul>
                  @break
                @case('PIN')
                    <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                    <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                    <div class="card-body">
                      <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Precio unitario: ${{ number_format(round( 1.15 * (0.80 * $informacion->precio_distribuidor), 3),2) }}</li>
                    </ul>
                    @break
                @case('PCS')
                    <h4 class="card-header text-white winideas">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }}</h4>  
                    <img src="{{ asset('img/'.$informacion->catalogo.'/'.$informacion->categoria.'/'.$informacion->modelo.'_'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="display: block;  max-height: 300px">
                    <div class="card-body">
                      <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Precio unitario: ${{ number_format(round($informacion->precio_distribuidor, 3),2) }}</li>
                    </ul>
                    @break
                @default
                  <h4 class="card-header text-white winideas ">Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }} </h4>  
                  <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="display: block; max-height: 300px">
                  <div class="card-body">
                    <p class="card-text"> {{strtoupper($informacion->descripcion) }}</p>
                  </div>
                  @if($informacion->catalogo === 'PPM' || $informacion->catalogo === 'PIN')
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Precio unitario: ${{ number_format(round(($informacion->precio_distribuidor*1.15), 3),2) }}</li>
                    </ul>
                  @elseif($informacion->catalogo === 'PCD')
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Precio unitario: ${{ number_format(round(($informacion->precio_distribuidor*1.13), 3),2) }}</li>
                    </ul>
                  @elseif($informacion->catalogo === 'PPO')
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Precio unitario: ${{ number_format(round(((.90*$informacion->precio_distribuidor)*1.175), 3),2) }}</li>
                    </ul>
                  @else
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Precio unitario: ${{ number_format(round($informacion->precio_publico, 3),2)}}</li>
                    </ul>
                  @endif
              @endswitch
            </div>
          </a>
          </div> 
      @endforeach
    </div>     
  </center>
@endsection