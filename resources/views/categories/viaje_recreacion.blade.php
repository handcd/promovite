@extends('layouts.main')
@section('content')

	<br><br><br><br>
	<div class="row center-block">
	    <div class="col-md-10 col-md-offset-1">
			@foreach ($itemsViaje as $itemsViaje)                
	            <div class="col-md-3 col-xs-6">
	              <div class="card mb-3">
	                <h3 class="card-header  bg-primary text-white"> Modelo {{ $itemsViaje->modelo }}</h3>      
	                <img src="{{ asset('img/viaje_recreacion/'.$itemsViaje->modelo.'/'.$itemsViaje->modelo.'_azul_lrg.jpg') }}" alt="Card image" style="height: 200px; width: 100%; display: block;">
	                <div class="card-body">
	                  <p class="card-text"></p>
	                </div>
	              </div>
	            </div>
	       	@endforeach
	    </div>
	</div>
	<br><br><br><br>
@endsection