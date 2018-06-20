@extends('layouts.main')
@section('content')
	<br><br><br><br>
	<center>
		<div class="row center-block">
            <div class="col-md-10 col-md-offset-1">
				@foreach ($itemsEscritura as $itemsEscritura)                
                    <div class="col-md-3 col-xs-6">
                      <div class="card mb-3">
                        <h3 class="card-header  bg-primary text-white"> Modelo {{ $itemsEscritura->modelo }}</h3>
                        
                        <img src="{{ asset('img/escritura/'.$itemsEscritura->modelo.'/'.$itemsEscritura->modelo.'_azul_lrg.jpg') }}" alt="Card image" style="height: 200px; width: 100%; display: block;">
                        <div class="card-body">
                          <p class="card-text"></p>
                        </div>
                      </div>
                    </div>
                     <!--<div class="col-md-3 col-xs-6">
                      <div class="card mb-3">
                        <h3 class="card-header  bg-warning text-white">Modelo 1024</h3>
                        
                        <img src="{{ asset('img/winideas/1024/1024_plata.jpg') }}" alt="Card image" style="height: 200px; width: 100%; display: block;">
                        <div class="card-body">
                          <p class="card-text">LAPIZ DE MADERA C/ARILLO Y GOMA</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                      <div class="card mb-3">
                        <h3 class="card-header  bg-danger text-white">Modelo 1103</h3>
                        
                        <img src="{{ asset('img/winideas/1103/1103_rojo.jpg') }}" alt="Card image" style="height: 200px; width: 100%; display: block;">
                        <div class="card-body">
                          <p class="card-text">BOLIGRAFO COOPER</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                      <div class="card mb-3">
                        <h3 class="card-header  bg-success text-white">Modelo a2426</h3>
                        
                        <img src="{{ asset('img/winideas/a2426/a2426_blanco.jpg') }}" alt="Card image" style="height: 200px; width: 100%; display: block;">
                        <div class="card-body">
                          <p class="card-text">BOLÍGRAFO METÁLICO MAJESTIC</p>
                        </div>
                      </div>
                    </div>-->
                 
				@endforeach
			</div>
    	</div>
    </center><br><br><br><br>
@endsection