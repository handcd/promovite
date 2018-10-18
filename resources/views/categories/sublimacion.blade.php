@extends('layouts.main')
@section('content')
	<br><br><br>
	<center>
    <div class="row text-center">
      <div class="col-md-10 col-md-offset-1"> 
        @foreach ($sublimacion as $informacion)          
          <div class="col-sm-3 col-sm-6">                                                
            <div class="card mb-3">
              @if( $informacion->catalogo === 'PWD')
                <h4 class="card-header text-white escritura"> Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }} </h4>  
                <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="height: 200px; width: 100%; display: block;" />
                <footer>
                  <a href="{{ url('/sublimacion/'.$informacion->id) }}" target="_blank" onclick="window.open(this.href, this.target, 'width = 600, height = 600, top = 50, left = 400'); return false;" class="pull-right">                   
                    <i class="far fa-eye"></i>
                  </a>
                </footer>
              @else
                <h4 class="card-header text-white escritura"> Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }} </h4>  
                <img src="{{ asset('img/'.$informacion->categoria.'/'.$informacion->catalogo.'/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'.jpg') }}" alt="Imagen no disponible" style="height: 200px; width: 100%; display: block;" />
                <footer>
                  <a href="{{ url('/sublimacion/'.$informacion->id) }}" target="_blank" onclick="window.open(this.href, this.target, 'width = 600, height = 600, top = 50, left = 400'); return false;" class="pull-right">                   
                    <i class="far fa-eye"></i>
                  </a>
                </footer>
              @endif
                
            </div>  
          </div>
        @endforeach 
      </div>      	
   	</div>    
  </center>
  <br><br><br><br>

 
@endsection