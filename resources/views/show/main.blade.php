<!DOCTYPE html>
<html lang="en">
<head>
	{{-- Responsive --}}
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  	<meta name="viewport" content="width=device-width" />
	{{-- Bootstrap v. 3.3.7 --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	{{-- JQuery --}}
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	{{-- Font Awesome--}} 
  	<link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  	 <link href="{{ asset('css/show.css') }}" rel="stylesheet" />
  	 <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
  	 

  	{{--Título de paǵina y logo --}}
	<title>Promovite | {{ $articulo->descripcion }}</title>
	<link rel="apple-touch-icon" sizes="76x76" href="{{ url('img/promovite-icon.png') }}" />
  	<link rel="icon" type="image/png" href="{{ url('img/promovite-icon.png') }}" />
  	
</head>
<style type="text/css">
	
    .bolita {
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
    @yield('articulo')
</body>
<script>
	//Contador para saber cuantos colores son del artículo seleccionado
	var counter = 0;
	//Obteniendo la imagen que se va a cambiar
	var imagen = document.getElementById('imagen');
	//Obteniendo el div donde se encuentra el select con las bolitas de colores
	var inputColor = document.getElementById('colores');
	//Ciclo para crear variables con el valor del color presionado
	@foreach ($colores as $color)
		counter +=1;
		eval("var color" + counter + "= document.getElementById('<?=$color->color?>')");
		eval("var valueColor" + counter + "= document.getElementById('<?=$color->color?>').value");		
	@endforeach
	//Evento para cambiar imagen dependiendo del color que se haya presionado
	function cambiarImagen(){
		for (var i = 1; i <= counter; i++) {
			if (eval("color" + i).checked) {
				if (eval("valueColor" + i) == 'blanco') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_blanco_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'plata') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_plata_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'negro') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_negro_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'azul') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azul_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'rojo') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'verde') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verde_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'amarillo') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillo_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'naranja') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_naranja_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'azulcielo') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcielo_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'morado') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_morado_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'lila') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_lila_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'rosa') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rosa_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'humo') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_humo_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'transparente') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_transparente_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'verdeclaro') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verdeclaro_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'gris') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_gris_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'azulcobalto') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcobalto_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'amarillofosforescente') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillofosforescente_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'naranjafosforescente') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_naranjafosforescente_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'azulfosforescente') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulfosforescente_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'rosafosforescente') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rosafosforescente_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'verdefosforescente') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verdefosforescente_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'beige') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_beige_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'oro') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_oro_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'cafe') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_cafe_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'azulpastel') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulpastel_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'azulmarino') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulmarino_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'vino') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_vino_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'rojo-blanco') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo-blanco_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'azul-blanco') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'azul-blanco') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'negro-blanco') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_negro-blanco_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'verde-blanco') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verde-blanco_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'rojotransparente') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rojotransparente_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'rojosolido') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rojosolido_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'negrosolido') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_negrosolido_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'verdetransparente') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verdetransparente_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'lilatransparente') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_lilatransparente_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'lilasolido') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_lilasolido_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'verdesolido') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verdesolido_lrg.jpg') }}");
				}else if (eval("valueColor" + i) == 'negrotransparente') {				
					$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->modelo.'/'.$articulo->modelo.'_negrotransparente_lrg.jpg') }}");
				}
			}
		}
	}	
	//Asignación de eventos a cada bolita de color
	for (var i =  1; i <= counter; i++) {
		eval("color" + i).addEventListener('click', function () {
       		cambiarImagen();
    	});
	  
	}
</script>
</html>