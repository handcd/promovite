@extends('show.main')
@section('articulo')
	<div class="row">
		<div class="col-md-12 text-center">
			<h3> Modelo {{ $articulo->catalogo }}-{{ $articulo->modelo }} </h3>
		</div>		
	</div>
	<br><br>
	<div class="row">		
		<div class="col-md-12"> 
			<div class="col-md-12 zoom">  
				<center><img src="{{ asset('img/VIAJE Y RECREACIÓN/'.$articulo->modelo.'/'.$articulo->modelo.'_'.$articulo->color.'_lrg.jpg') }}" alt="Card image" style="height: 150px; width: 150px; display: block;" class="zoom" id="imagen" /></center>
			</div>
			<br><br>
			<div class="col-md-12 text-center">
				<legend><strong>Colores disponibles</strong></legend>
				@foreach ($colores as $color)	
					<label class="radio-inline"><input type="radio" name="optradio" style="display: none;" value="<?=$color->color?>" id="<?=$color->color?>">
						<i class="fa fa-circle  fa-2x fa-lg <?=$color->color?>" ></i>
					</label>									
				@endforeach		
			</div>			
			<br><br>
			<div class="text-center">				
				<div class="col-md-12 text-center" id="descripcion">
					<legend><strong>Descripción</strong></legend>
					<small>{{ $articulo->descripcion }}</small>
				</div>
				<br> 
		  		<div class="col-md-12 text-center" id="descripcion">
		  			<legend><strong>Categoria</strong></legend>
		  			<small>{{ $articulo->categoria }}</small>
		  		</div>
				<br>
				<div class="col-md-12 text-center" id="descripcion">
					<legend><strong>Subcategoria</strong></legend>
					<small>{{ $articulo->subcategoria }}</small>
				</div>
				<br>
				<div class="col-md-12 text-center" id="descripcion">
					<legend><strong>Medidas</strong></legend>
					<small>{{ $articulo->largo }} x {{ $articulo->ancho }} x {{ $articulo->alto}}</small>
				</div>
				<br>
				<div class="col-md-12 text-center" id="descripcion">
					<legend><strong>Precio</strong></legend>
					<small>${{ $articulo->precio_publico }} c/u</small>
				</div>		  
				<br>
			</div>			
		</div>
	</div>		
@endsection