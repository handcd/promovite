@extends('show.main')
@section('articulo')
	
	<div class="jumbotron text-center" style="background-color: white;padding-top: 40px;padding-bottom: 40px;margin-bottom: 0px;">
	  	<h1 class="display-3 pull-left">Modelo {{ $articulo->catalogo }}-{{ $articulo->modelo }}</h1>
	  	<div class="col-md-12">
	  		@switch($articulo->catalogo)
	  			@case('PWD')
	  				<center><img src="{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_'.$articulo->color.'_lrg.jpg') }}" alt="Card image" style="max-height: 300px; display: block;" class="zoom" id="imagen" /></center>
	  				@break
	  			@case('PMD')
	  				<center><img src="{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'-'.$articulo->color.'.jpg') }}" alt="Card image" style="max-height: 300px; display: block;" class="zoom" id="imagen" /></center>
	  				@break
	  			@case('PPF')
	  				@if($articulo->codigo_color == NULL && $articulo->color == NULL)
                		<center><img src="{{ asset('img/'.$articulo->catalogo.'/'.$articulo->modelo.'.jpg') }}" alt="Card image" style="max-height: 300px; display: block;" class="zoom" id="imagen" /></center>
                	@else
                  		<center><img src="{{ asset('img/'.$articulo->catalogo.'/'.$articulo->modelo.'-'.$articulo->codigo_color.'.jpg') }}" alt="Card image" style="max-height: 300px; display: block;" class="zoom" id="imagen" /></center>
                	@endif  
                	@break
                @case('PSL')
                	<center><img src="{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_'.strtoupper($articulo->color).'.jpg') }}" alt="Card image" style="max-height: 300px; display: block;" class="zoom" id="imagen" /></center>
	  				@break
                @default
                	<center><img src="{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_'.$articulo->color.'.jpg') }}" alt="Card image" style=" max-height: 300px; display: block;" class="zoom" id="imagen" /></center>
			@endswitch
		</div>
		<br><br>
	  	<p class="lead">Colores disponibles.</p>
	  	<br>
	  	@if($articulo->catalogo === 'PMD')
	  		<p>Único disponible</p>
	  	@elseif($articulo->catalogo === 'PPF')
	  		@foreach ($colores as $color)	
					<i class="fa fa-circle  fa-4x fa-lg <?= strtolower($color->color) ?>" style="cursor: default;" ></i>
			@endforeach
			<br><br>
			<small>Bolitas únicamente decorativas</small>
	  	@else
		  	@foreach ($colores as $color)	
				<label class="radio-inline"><input type="radio" name="optradio" style="display: none;" value="<?= strtolower($color->color) ?>" id="<?= strtolower($color->color) ?>">
					<i class="fa fa-circle  fa-4x fa-lg <?= strtolower($color->color) ?>" style="padding-bottom: 10px;"></i>
				</label>									
			@endforeach
		@endif
	  	<hr class="my-4">
	  	<p>{{ strtoupper($articulo->descripcion) }}</p>
	  	<hr class="my-4">
	  	<p>Categoría: {{ $articulo->categoria }}</p>
	  	<p class="lead">
	  	<hr class="my-4">
	  	<p>Subcategoría: {{ $articulo->subcategoria }}</p>
	  	<hr class="my-4">
	  	<p>Medidas: {{ $articulo->largo }} x {{ $articulo->ancho }} x {{ $articulo->alto}}</p>
	  	{{-- Promoline --}}
		@if($articulo->catalogo === 'PPM' || $articulo->catalogo === 'PIN')
			<p>Precio: ${{ number_format(round(($articulo->precio_distribuidor*1.15), 3),2) }} </p>
		{{-- Promofactory --}}
		@elseif($articulo->catalogo === 'PPF')
			<black><p>Consultar el precio con su agente de ventas </p></black>
		{{-- For promotional--}}
		@elseif($articulo->catalogo === 'PFP')
			<black><p> Precio: ${{ number_format(round(($articulo->precio_distribuidor*1.10), 3),2) }}</p></black>
		{{-- CDO --}}
		@elseif($articulo->catalogo === 'PCD')
			<black><p> Precio: ${{ number_format(round(($articulo->precio_distribuidor*1.13), 3),2) }}</p></black>
		{{-- Winideas--}}
		@elseif($articulo->catalogo === 'PWD')
			<black><p> Precio unitario: $  {{ number_format(round((1.18 * (0.79 * $articulo->precio_distribuidor)),3),2) }}</p></black>
		{{-- Promoopcion --}}
		@elseif($articulo->catalogo === 'PPO')
			<black><p> Precio unitario: $  {{ number_format(round(((0.90 * $articulo->precio_distribuidor)*1.175),3),2) }}</p></black>
		{{-- Innova --}}
		@elseif($articulo->catalogo === 'PIN')
			<black><p> Precio unitario: $  {{ number_format(round(( 1.15 * (0.80 * $articulo->precio_distribuidor)),3),2) }}</p></black>
		{{-- Otros --}}
		@else
			<p>Precio: $ {{ number_format(round($articulo->precio_publico, 3),2) }} </p>
		@endif
	</div>
	
@endsection