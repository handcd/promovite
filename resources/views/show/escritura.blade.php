@extends('show.main')
@section('articulo')
	<br><br>
	<div class="row">
		<div class="col-md-12 text-center text-white" style="background-color: #00aeef">
			<h3> Modelo {{ $articulo->catalogo }}-{{ $articulo->modelo }} </h3>
		</div>		
	</div>
	<br><br>
	<div class="row">		
		<div class="col-md-12"> 
			<div class="col-md-12 zoom">
				@if( $articulo->catalogo === 'PWD')  
					<center><img src="{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_'.$articulo->color.'_lrg.jpg') }}" alt="Card image" style="height: 150px; width: 150px; display: block;" class="zoom" id="imagen" /></center>
				@else
					<center><img src="{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_'.$articulo->color.'.jpg') }}" alt="Card image" style="height: 150px; width: 150px; display: block;" class="zoom" id="imagen" /></center>
				@endif
			</div>
			<br><br>
			<div>
				<div class="col-md-12 text-center text-white" style="background-color: #00aeef">
					<h3>Colores disponibles</h3>
				</div>
				<div class="col-md-12 text-center">
					<br>
					@foreach ($colores as $color)	
						<label class="radio-inline"><input type="radio" name="optradio" style="display: none;" value="<?=$color->color?>" id="<?=$color->color?>">
							<i class="fa fa-circle  fa-2x fa-lg <?=$color->color?>" ></i>
						</label>									
					@endforeach
				</div>		
			</div>			
			<br><br><br>
			<div class="text-center">			
				<div class="col-md-12 text-center text-white" style="background-color: #00aeef">
					<h3>Descripción</h3>
				</div>
				<small>{{ $articulo->descripcion }}</small>
				<br><br>
		  		<div class="col-md-12 text-center text-white" style="background-color: #00aeef">
		  			<h3>Categoría</h3>
		  		</div>
		  		<small>{{ $articulo->categoria }}</small>
				<br><br>
				<div class="col-md-12 text-center text-white" style="background-color: #00aeef">
					<h3>Subcategoría</h3>
				</div>
				<small>{{ $articulo->subcategoria }}</small>
				<br><br>
				<div class="col-md-12 text-center text-white" style="background-color: #00aeef">
					<h3>Medidas</h3>
				</div>
				<small>{{ $articulo->largo }} x {{ $articulo->ancho }} x {{ $articulo->alto}}</small>
				<br><br>
				<div class="col-md-12 text-center text-white" style="background-color: #00aeef">
					<h3>Precio</h3>
				</div>		  
				<small>${{ round($articulo->precio_publico, 2) }} c/u</small>
				<br><br>
			</div>	
			
		</div>
	</div>	
	
@endsection