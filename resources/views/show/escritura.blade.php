@extends('show.main')
@section('articulo')
	<div class="jumbotron text-center" style="background-color: white;padding-top: 40px;padding-bottom: 40px;margin-bottom: 0px;">
	  	<h1 class="display-3 ">Modelo {{ $articulo->catalogo }}-{{ $articulo->modelo }}</h1>
	  	<div class="col-md-12 zoom">
			@if( $articulo->catalogo === 'PWD')  
				<center><img src="{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_'.$articulo->color.'_lrg.jpg') }}" alt="Card image" style="max-height: 300px; display: block;" class="zoom" id="imagen" /></center>
			@elseif($articulo->catalogo === 'PMD')
                <center><img src="{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'-'.$articulo->color.'.jpg') }}" alt="Card image" style="max-height: 300px; display: block;" class="zoom" id="imagen" /></center>
			@else
				<center><img src="{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_'.$articulo->color.'.jpg') }}" alt="Card image" style=" max-height: 300px; display: block;" class="zoom" id="imagen" /></center>
			@endif
		</div>
		<br><br>
	  	<p class="lead">Colores disponibles.</p>
	  	<br>
	  	@if($articulo->catalogo === 'PMD')
	  		<p>Único disponible</p>
	  	@else
		  	@foreach ($colores as $color)	
				<label class="radio-inline"><input type="radio" name="optradio" style="display: none;" value="<?= strtolower($color->color) ?>" id="<?= strtolower($color->color) ?>">
					<i class="fa fa-circle  fa-4x fa-lg <?= strtolower($color->color) ?>" ></i>
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
	  	<hr class="my-4">
		@if($articulo->catalogo === 'PPM')
			<p>Precio: $ {{ round(($articulo->precio_distribuidor*1.15), 2) }} </p>
		@else
			<p>Precio: $ {{ round($articulo->precio_publico, 2) }} </p>
		@endif
	</div>
	
@endsection