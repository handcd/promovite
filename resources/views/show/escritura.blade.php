<!DOCTYPE html>
<html lang="en">
<head>
	{{-- Responsive --}}
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{-- Bootstrap v. 3.3.7 --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	{{-- JQuery --}}
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	{{-- Font Awesome--}} 
  	<link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  	{{--Título de paǵina y logo --}}
	<title>Promovite | {{ $articulo->descripcion }}</title>
	<link rel="apple-touch-icon" sizes="76x76" href="{{ url('img/promovite-icon.png') }}" />
  	<link rel="icon" type="image/png" href="{{ url('img/promovite-icon.png') }}" />
  	{{-- Contiene todo el css necesario para los show --}}
  	<link href="{{ asset('css/show.css') }}" rel="stylesheet" />
</head>
<style type="text/css">
	.button {
      background-color: #FFFFFF;
      border: none;
      color: white;
      padding: 5px 5px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 4px;
      cursor: pointer;
    }
</style>
<body>
	<div class="row">
		<div class="col-md-12 text-center">
			<h3> Modelo {{ $articulo->catalogo }}-{{ $articulo->modelo }} </h3>
		</div>		
	</div>
	<div class="row">		
		<div class="col-md-12"> 
			<div class="col-md-12 zoom" id="colores">  
				<center><img src="{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_'.$articulo->color.'_lrg.jpg') }}" alt="Card image" style="height: 150px; width: 150px; display: block;" class="zoom" /></center>
			</div>
			<br><br>
			<div class="col-md-12 text-center">
				@foreach ($colores as $color)				
					<i class="fa fa-circle  fa-2x fa-lg <?=$color->color?> button" id="<?=$color->color?>"></i>				
				@endforeach		
			</div>
			<br><br>
			<div class="text-center">				
			  <button type="button" class="btn escritura" data-toggle="collapse" data-target="#descripcion"><i class="fa fa-angle-down"></i> Descripción </button>
			  <br>
			  <div id="descripcion" class="collapse">
			  	{{ $articulo->descripcion }}
			  </div>
			  <br> 
			  <button type="button" class="btn escritura" data-toggle="collapse" data-target="#categoria"><i class="fa fa-angle-down"></i> Categoria</button>
			  <br>
			  <div id="categoria" class="collapse">
			  	{{ $articulo->categoria }}
			  </div>
			  <br>
			  <button type="button" class="btn escritura" data-toggle="collapse" data-target="#subcategoria"><i class="fa fa-angle-down"></i> Subcategoria </button>
			  <br>
			  <div id="subcategoria" class="collapse">
			  	{{ $articulo->subcategoria }}
			  </div> 
			  <br>
			  <button type="button" class="btn escritura" data-toggle="collapse" data-target="#precio"><i class="fa fa-angle-down"></i> Precio </button>
			  <br>
			  <div id="precio" class="collapse">
			  	${{ $articulo->precio_publico }} c/u
			  </div> 
			  <br>				
			  <button type="button" class="btn escritura" data-toggle="collapse" data-target="#caracteristicas"><i class="fa fa-angle-down"></i> Medidas </button>
			  <br>
			  <div id="caracteristicas" class="collapse">
			  	{{ $articulo->largo }} x {{ $articulo->ancho }} x {{ $articulo->alto}}
			  </div> 
			  <br>
			</div>			
		</div>
	</div>		
</body>
<script type="text/javascript">
		@foreach ($colores as $color)
			var <?=$color->color?> = document.getElementById('<?=$color->color?>');
			console.log('<?=$color->color?>');
		@endforeach

		function cambiarImagen(){
			console.log('<?=$color->color?>');
		}
		
		<?=$color->color?>.addEventListener('click', function () {
        	cambiarImagen();
    	});
</script>
</html>