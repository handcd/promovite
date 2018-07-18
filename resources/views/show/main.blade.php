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
		if (color1.checked) {
			if (valueColor1 == 'blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_blanco_lrg.jpg') }}");
			}else if (valueColor1 == 'plata') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_plata_lrg.jpg') }}");
			}else if (valueColor1 == 'negro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro_lrg.jpg') }}");
			}else if (valueColor1 == 'azul') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul_lrg.jpg') }}");
			}else if (valueColor1 == 'rojo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo_lrg.jpg') }}");
			}else if (valueColor1 == 'verde') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde_lrg.jpg') }}");
			}else if (valueColor1 == 'amarillo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillo_lrg.jpg') }}");
			}else if (valueColor1 == 'naranja') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranja_lrg.jpg') }}");
			}else if (valueColor1 == 'azulcielo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcielo_lrg.jpg') }}");
			}else if (valueColor1 == 'morado') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_morado_lrg.jpg') }}");
			}else if (valueColor1 == 'lila') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lila_lrg.jpg') }}");
			}else if (valueColor1 == 'rosa') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosa_lrg.jpg') }}");
			}else if (valueColor1 == 'humo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_humo_lrg.jpg') }}");
			}else if (valueColor1 == 'transparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_transparente_lrg.jpg') }}");
			}else if (valueColor1 == 'verdeclaro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdeclaro_lrg.jpg') }}");
			}else if (valueColor1 == 'gris') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_gris_lrg.jpg') }}");
			}else if (valueColor1 == 'azulcobalto') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcobalto_lrg.jpg') }}");
			}else if (valueColor1 == 'amarillofosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillofosforescente_lrg.jpg') }}");
			}else if (valueColor1 == 'naranjafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranjafosforescente_lrg.jpg') }}");
			}else if (valueColor1 == 'azulfosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulfosforescente_lrg.jpg') }}");
			}else if (valueColor1 == 'rosafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosafosforescente_lrg.jpg') }}");
			}else if (valueColor1 == 'verdefosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdefosforescente_lrg.jpg') }}");
			}else if (valueColor1 == 'beige') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_beige_lrg.jpg') }}");
			}else if (valueColor1 == 'oro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_oro_lrg.jpg') }}");
			}else if (valueColor1 == 'cafe') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_cafe_lrg.jpg') }}");
			}else if (valueColor1 == 'azulpastel') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulpastel_lrg.jpg') }}");
			}else if (valueColor1 == 'azulmarino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulmarino_lrg.jpg') }}");
			}else if (valueColor1 == 'vino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_vino_lrg.jpg') }}");
			}else if (valueColor1 == 'rojo-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo-blanco_lrg.jpg') }}");
			}else if (valueColor1 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor1 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor1 == 'negro-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro-blanco_lrg.jpg') }}");
			}else if (valueColor1 == 'verde-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde-blanco_lrg.jpg') }}");
			}else if (valueColor1 == 'rojotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojotransparente_lrg.jpg') }}");
			}else if (valueColor1 == 'rojosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojosolido_lrg.jpg') }}");
			}else if (valueColor1 == 'negrosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrosolido_lrg.jpg') }}");
			}else if (valueColor1 == 'verdetransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdetransparente_lrg.jpg') }}");
			}else if (valueColor1 == 'lilatransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilatransparente_lrg.jpg') }}");
			}else if (valueColor1 == 'lilasolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilasolido_lrg.jpg') }}");
			}else if (valueColor1 == 'verdesolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdesolido_lrg.jpg') }}");
			}else if (valueColor1 == 'negrotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrotransparente_lrg.jpg') }}");
			}

		}else if (color2.checked) {
			if (valueColor2 == 'blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_blanco_lrg.jpg') }}");
			}else if (valueColor2 == 'plata') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_plata_lrg.jpg') }}");
			}else if (valueColor2 == 'negro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro_lrg.jpg') }}");
			}else if (valueColor2 == 'azul') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul_lrg.jpg') }}");
			}else if (valueColor2 == 'rojo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo_lrg.jpg') }}");
			}else if (valueColor2 == 'verde') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde_lrg.jpg') }}");
			}else if (valueColor2 == 'amarillo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillo_lrg.jpg') }}");
			}else if (valueColor2 == 'naranja') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranja_lrg.jpg') }}");
			}else if (valueColor2 == 'azulcielo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcielo_lrg.jpg') }}");
			}else if (valueColor2 == 'morado') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_morado_lrg.jpg') }}");
			}else if (valueColor2 == 'lila') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lila_lrg.jpg') }}");
			}else if (valueColor2 == 'rosa') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosa_lrg.jpg') }}");
			}else if (valueColor2 == 'humo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_humo_lrg.jpg') }}");
			}else if (valueColor2 == 'transparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_transparente_lrg.jpg') }}");
			}else if (valueColor2 == 'verdeclaro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdeclaro_lrg.jpg') }}");
			}else if (valueColor2 == 'gris') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_gris_lrg.jpg') }}");
			}else if (valueColor2 == 'azulcobalto') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcobalto_lrg.jpg') }}");
			}else if (valueColor2 == 'amarillofosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillofosforescente_lrg.jpg') }}");
			}else if (valueColor2 == 'naranjafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranjafosforescente_lrg.jpg') }}");
			}else if (valueColor2 == 'azulfosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulfosforescente_lrg.jpg') }}");
			}else if (valueColor2 == 'rosafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosafosforescente_lrg.jpg') }}");
			}else if (valueColor2 == 'verdefosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdefosforescente_lrg.jpg') }}");
			}else if (valueColor2 == 'beige') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_beige_lrg.jpg') }}");
			}else if (valueColor2 == 'oro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_oro_lrg.jpg') }}");
			}else if (valueColor2 == 'cafe') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_cafe_lrg.jpg') }}");
			}else if (valueColor2 == 'azulpastel') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulpastel_lrg.jpg') }}");
			}else if (valueColor2 == 'azulmarino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulmarino_lrg.jpg') }}");
			}else if (valueColor2 == 'vino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_vino_lrg.jpg') }}");
			}else if (valueColor2 == 'rojo-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo-blanco_lrg.jpg') }}");
			}else if (valueColor2 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor2 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor2 == 'negro-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro-blanco_lrg.jpg') }}");
			}else if (valueColor2 == 'verde-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde-blanco_lrg.jpg') }}");
			}else if (valueColor2 == 'rojotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojotransparente_lrg.jpg') }}");
			}else if (valueColor2 == 'rojosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojosolido_lrg.jpg') }}");
			}else if (valueColor2 == 'negrosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrosolido_lrg.jpg') }}");
			}else if (valueColor2 == 'verdetransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdetransparente_lrg.jpg') }}");
			}else if (valueColor2 == 'lilatransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilatransparente_lrg.jpg') }}");
			}else if (valueColor2 == 'lilasolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilasolido_lrg.jpg') }}");
			}else if (valueColor2 == 'verdesolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdesolido_lrg.jpg') }}");
			}else if (valueColor2 == 'negrotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrotransparente_lrg.jpg') }}");
			}

		}else if (color3.checked) {
			if (valueColor3 == 'blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_blanco_lrg.jpg') }}");
			}else if (valueColor3 == 'plata') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_plata_lrg.jpg') }}");
			}else if (valueColor3 == 'negro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro_lrg.jpg') }}");
			}else if (valueColor3 == 'azul') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul_lrg.jpg') }}");
			}else if (valueColor3 == 'rojo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo_lrg.jpg') }}");
			}else if (valueColor3 == 'verde') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde_lrg.jpg') }}");
			}else if (valueColor3 == 'amarillo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillo_lrg.jpg') }}");
			}else if (valueColor3 == 'naranja') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranja_lrg.jpg') }}");
			}else if (valueColor3 == 'azulcielo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcielo_lrg.jpg') }}");
			}else if (valueColor3 == 'morado') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_morado_lrg.jpg') }}");
			}else if (valueColor3 == 'lila') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lila_lrg.jpg') }}");
			}else if (valueColor3 == 'rosa') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosa_lrg.jpg') }}");
			}else if (valueColor3 == 'humo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_humo_lrg.jpg') }}");
			}else if (valueColor3 == 'transparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_transparente_lrg.jpg') }}");
			}else if (valueColor3 == 'verdeclaro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdeclaro_lrg.jpg') }}");
			}else if (valueColor3 == 'gris') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_gris_lrg.jpg') }}");
			}else if (valueColor3 == 'azulcobalto') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcobalto_lrg.jpg') }}");
			}else if (valueColor3 == 'amarillofosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillofosforescente_lrg.jpg') }}");
			}else if (valueColor3 == 'naranjafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranjafosforescente_lrg.jpg') }}");
			}else if (valueColor3 == 'azulfosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulfosforescente_lrg.jpg') }}");
			}else if (valueColor3 == 'rosafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosafosforescente_lrg.jpg') }}");
			}else if (valueColor3 == 'verdefosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdefosforescente_lrg.jpg') }}");
			}else if (valueColor3 == 'beige') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_beige_lrg.jpg') }}");
			}else if (valueColor3 == 'oro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_oro_lrg.jpg') }}");
			}else if (valueColor3 == 'cafe') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_cafe_lrg.jpg') }}");
			}else if (valueColor3 == 'azulpastel') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulpastel_lrg.jpg') }}");
			}else if (valueColor3 == 'azulmarino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulmarino_lrg.jpg') }}");
			}else if (valueColor3 == 'vino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_vino_lrg.jpg') }}");
			}else if (valueColor3 == 'rojo-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo-blanco_lrg.jpg') }}");
			}else if (valueColor3 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor3 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor3 == 'negro-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro-blanco_lrg.jpg') }}");
			}else if (valueColor3 == 'verde-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde-blanco_lrg.jpg') }}");
			}else if (valueColor3 == 'rojotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojotransparente_lrg.jpg') }}");
			}else if (valueColor3 == 'rojosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojosolido_lrg.jpg') }}");
			}else if (valueColor3 == 'negrosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrosolido_lrg.jpg') }}");
			}else if (valueColor3 == 'verdetransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdetransparente_lrg.jpg') }}");
			}else if (valueColor3 == 'lilatransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilatransparente_lrg.jpg') }}");
			}else if (valueColor3 == 'lilasolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilasolido_lrg.jpg') }}");
			}else if (valueColor3 == 'verdesolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdesolido_lrg.jpg') }}");
			}else if (valueColor3 == 'negrotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrotransparente_lrg.jpg') }}");
			}
		}else if (color4.checked) {
			if (valueColor4 == 'blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_blanco_lrg.jpg') }}");
			}else if (valueColor4 == 'plata') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_plata_lrg.jpg') }}");
			}else if (valueColor4 == 'negro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro_lrg.jpg') }}");
			}else if (valueColor4 == 'azul') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul_lrg.jpg') }}");
			}else if (valueColor4 == 'rojo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo_lrg.jpg') }}");
			}else if (valueColor4 == 'verde') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde_lrg.jpg') }}");
			}else if (valueColor4 == 'amarillo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillo_lrg.jpg') }}");
			}else if (valueColor4 == 'naranja') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranja_lrg.jpg') }}");
			}else if (valueColor4 == 'azulcielo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcielo_lrg.jpg') }}");
			}else if (valueColor4 == 'morado') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_morado_lrg.jpg') }}");
			}else if (valueColor4 == 'lila') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lila_lrg.jpg') }}");
			}else if (valueColor4 == 'rosa') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosa_lrg.jpg') }}");
			}else if (valueColor4 == 'humo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_humo_lrg.jpg') }}");
			}else if (valueColor4 == 'transparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_transparente_lrg.jpg') }}");
			}else if (valueColor4 == 'verdeclaro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdeclaro_lrg.jpg') }}");
			}else if (valueColor4 == 'gris') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_gris_lrg.jpg') }}");
			}else if (valueColor4 == 'azulcobalto') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcobalto_lrg.jpg') }}");
			}else if (valueColor4 == 'amarillofosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillofosforescente_lrg.jpg') }}");
			}else if (valueColor4 == 'naranjafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranjafosforescente_lrg.jpg') }}");
			}else if (valueColor4 == 'azulfosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulfosforescente_lrg.jpg') }}");
			}else if (valueColor4 == 'rosafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosafosforescente_lrg.jpg') }}");
			}else if (valueColor4 == 'verdefosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdefosforescente_lrg.jpg') }}");
			}else if (valueColor4 == 'beige') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_beige_lrg.jpg') }}");
			}else if (valueColor4 == 'oro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_oro_lrg.jpg') }}");
			}else if (valueColor4 == 'cafe') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_cafe_lrg.jpg') }}");
			}else if (valueColor4 == 'azulpastel') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulpastel_lrg.jpg') }}");
			}else if (valueColor4 == 'azulmarino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulmarino_lrg.jpg') }}");
			}else if (valueColor4 == 'vino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_vino_lrg.jpg') }}");
			}else if (valueColor4 == 'rojo-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo-blanco_lrg.jpg') }}");
			}else if (valueColor4 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor4 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor4 == 'negro-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro-blanco_lrg.jpg') }}");
			}else if (valueColor4 == 'verde-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde-blanco_lrg.jpg') }}");
			}else if (valueColor4 == 'rojotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojotransparente_lrg.jpg') }}");
			}else if (valueColor4 == 'rojosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojosolido_lrg.jpg') }}");
			}else if (valueColor4 == 'negrosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrosolido_lrg.jpg') }}");
			}else if (valueColor4 == 'verdetransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdetransparente_lrg.jpg') }}");
			}else if (valueColor4 == 'lilatransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilatransparente_lrg.jpg') }}");
			}else if (valueColor4 == 'lilasolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilasolido_lrg.jpg') }}");
			}else if (valueColor4 == 'verdesolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdesolido_lrg.jpg') }}");
			}else if (valueColor4 == 'negrotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrotransparente_lrg.jpg') }}");
			}
		}else if (color5.checked) {
			if (valueColor5 == 'blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_blanco_lrg.jpg') }}");
			}else if (valueColor5 == 'plata') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_plata_lrg.jpg') }}");
			}else if (valueColor5 == 'negro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro_lrg.jpg') }}");
			}else if (valueColor5 == 'azul') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul_lrg.jpg') }}");
			}else if (valueColor5 == 'rojo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo_lrg.jpg') }}");
			}else if (valueColor5 == 'verde') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde_lrg.jpg') }}");
			}else if (valueColor5 == 'amarillo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillo_lrg.jpg') }}");
			}else if (valueColor5 == 'naranja') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranja_lrg.jpg') }}");
			}else if (valueColor5 == 'azulcielo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcielo_lrg.jpg') }}");
			}else if (valueColor5 == 'morado') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_morado_lrg.jpg') }}");
			}else if (valueColor5 == 'lila') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lila_lrg.jpg') }}");
			}else if (valueColor5 == 'rosa') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosa_lrg.jpg') }}");
			}else if (valueColor5 == 'humo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_humo_lrg.jpg') }}");
			}else if (valueColor5 == 'transparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_transparente_lrg.jpg') }}");
			}else if (valueColor5 == 'verdeclaro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdeclaro_lrg.jpg') }}");
			}else if (valueColor5 == 'gris') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_gris_lrg.jpg') }}");
			}else if (valueColor5 == 'azulcobalto') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcobalto_lrg.jpg') }}");
			}else if (valueColor5 == 'amarillofosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillofosforescente_lrg.jpg') }}");
			}else if (valueColor5 == 'naranjafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranjafosforescente_lrg.jpg') }}");
			}else if (valueColor5 == 'azulfosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulfosforescente_lrg.jpg') }}");
			}else if (valueColor5 == 'rosafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosafosforescente_lrg.jpg') }}");
			}else if (valueColor5 == 'verdefosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdefosforescente_lrg.jpg') }}");
			}else if (valueColor5 == 'beige') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_beige_lrg.jpg') }}");
			}else if (valueColor5 == 'oro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_oro_lrg.jpg') }}");
			}else if (valueColor5 == 'cafe') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_cafe_lrg.jpg') }}");
			}else if (valueColor5 == 'azulpastel') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulpastel_lrg.jpg') }}");
			}else if (valueColor5 == 'azulmarino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulmarino_lrg.jpg') }}");
			}else if (valueColor5 == 'vino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_vino_lrg.jpg') }}");
			}else if (valueColor5 == 'rojo-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo-blanco_lrg.jpg') }}");
			}else if (valueColor5 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor5 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor5 == 'negro-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro-blanco_lrg.jpg') }}");
			}else if (valueColor5 == 'verde-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde-blanco_lrg.jpg') }}");
			}else if (valueColor5 == 'rojotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojotransparente_lrg.jpg') }}");
			}else if (valueColor5 == 'rojosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojosolido_lrg.jpg') }}");
			}else if (valueColor5 == 'negrosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrosolido_lrg.jpg') }}");
			}else if (valueColor5 == 'verdetransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdetransparente_lrg.jpg') }}");
			}else if (valueColor5 == 'lilatransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilatransparente_lrg.jpg') }}");
			}else if (valueColor5 == 'lilasolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilasolido_lrg.jpg') }}");
			}else if (valueColor5 == 'verdesolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdesolido_lrg.jpg') }}");
			}else if (valueColor5 == 'negrotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrotransparente_lrg.jpg') }}");
			}
		}else if (color6.checked) {
			if (valueColor6 == 'blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_blanco_lrg.jpg') }}");
			}else if (valueColor6 == 'plata') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_plata_lrg.jpg') }}");
			}else if (valueColor6 == 'negro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro_lrg.jpg') }}");
			}else if (valueColor6 == 'azul') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul_lrg.jpg') }}");
			}else if (valueColor6 == 'rojo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo_lrg.jpg') }}");
			}else if (valueColor6 == 'verde') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde_lrg.jpg') }}");
			}else if (valueColor6 == 'amarillo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillo_lrg.jpg') }}");
			}else if (valueColor6 == 'naranja') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranja_lrg.jpg') }}");
			}else if (valueColor6 == 'azulcielo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcielo_lrg.jpg') }}");
			}else if (valueColor6 == 'morado') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_morado_lrg.jpg') }}");
			}else if (valueColor6 == 'lila') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lila_lrg.jpg') }}");
			}else if (valueColor6 == 'rosa') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosa_lrg.jpg') }}");
			}else if (valueColor6 == 'humo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_humo_lrg.jpg') }}");
			}else if (valueColor6 == 'transparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_transparente_lrg.jpg') }}");
			}else if (valueColor6 == 'verdeclaro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdeclaro_lrg.jpg') }}");
			}else if (valueColor6 == 'gris') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_gris_lrg.jpg') }}");
			}else if (valueColor6 == 'azulcobalto') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcobalto_lrg.jpg') }}");
			}else if (valueColor6 == 'amarillofosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillofosforescente_lrg.jpg') }}");
			}else if (valueColor6 == 'naranjafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranjafosforescente_lrg.jpg') }}");
			}else if (valueColor6 == 'azulfosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulfosforescente_lrg.jpg') }}");
			}else if (valueColor6 == 'rosafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosafosforescente_lrg.jpg') }}");
			}else if (valueColor6 == 'verdefosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdefosforescente_lrg.jpg') }}");
			}else if (valueColor6 == 'beige') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_beige_lrg.jpg') }}");
			}else if (valueColor6 == 'oro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_oro_lrg.jpg') }}");
			}else if (valueColor6 == 'cafe') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_cafe_lrg.jpg') }}");
			}else if (valueColor6 == 'azulpastel') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulpastel_lrg.jpg') }}");
			}else if (valueColor6 == 'azulmarino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulmarino_lrg.jpg') }}");
			}else if (valueColor6 == 'vino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_vino_lrg.jpg') }}");
			}else if (valueColor6 == 'rojo-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo-blanco_lrg.jpg') }}");
			}else if (valueColor6 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor6 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor6 == 'negro-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro-blanco_lrg.jpg') }}");
			}else if (valueColor6 == 'verde-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde-blanco_lrg.jpg') }}");
			}else if (valueColor6 == 'rojotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojotransparente_lrg.jpg') }}");
			}else if (valueColor6 == 'rojosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojosolido_lrg.jpg') }}");
			}else if (valueColor6 == 'negrosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrosolido_lrg.jpg') }}");
			}else if (valueColor6 == 'verdetransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdetransparente_lrg.jpg') }}");
			}else if (valueColor6 == 'lilatransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilatransparente_lrg.jpg') }}");
			}else if (valueColor6 == 'lilasolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilasolido_lrg.jpg') }}");
			}else if (valueColor6 == 'verdesolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdesolido_lrg.jpg') }}");
			}else if (valueColor6 == 'negrotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrotransparente_lrg.jpg') }}");
			}
		}else if (color7.checked) {
			if (valueColor7 == 'blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_blanco_lrg.jpg') }}");
			}else if (valueColor7 == 'plata') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_plata_lrg.jpg') }}");
			}else if (valueColor7 == 'negro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro_lrg.jpg') }}");
			}else if (valueColor7 == 'azul') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul_lrg.jpg') }}");
			}else if (valueColor7 == 'rojo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo_lrg.jpg') }}");
			}else if (valueColor7 == 'verde') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde_lrg.jpg') }}");
			}else if (valueColor7 == 'amarillo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillo_lrg.jpg') }}");
			}else if (valueColor7 == 'naranja') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranja_lrg.jpg') }}");
			}else if (valueColor7 == 'azulcielo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcielo_lrg.jpg') }}");
			}else if (valueColor7 == 'morado') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_morado_lrg.jpg') }}");
			}else if (valueColor7 == 'lila') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lila_lrg.jpg') }}");
			}else if (valueColor7 == 'rosa') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosa_lrg.jpg') }}");
			}else if (valueColor7 == 'humo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_humo_lrg.jpg') }}");
			}else if (valueColor7 == 'transparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_transparente_lrg.jpg') }}");
			}else if (valueColor7 == 'verdeclaro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdeclaro_lrg.jpg') }}");
			}else if (valueColor7 == 'gris') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_gris_lrg.jpg') }}");
			}else if (valueColor7 == 'azulcobalto') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcobalto_lrg.jpg') }}");
			}else if (valueColor7 == 'amarillofosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillofosforescente_lrg.jpg') }}");
			}else if (valueColor7 == 'naranjafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranjafosforescente_lrg.jpg') }}");
			}else if (valueColor7 == 'azulfosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulfosforescente_lrg.jpg') }}");
			}else if (valueColor7 == 'rosafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosafosforescente_lrg.jpg') }}");
			}else if (valueColor7 == 'verdefosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdefosforescente_lrg.jpg') }}");
			}else if (valueColor7 == 'beige') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_beige_lrg.jpg') }}");
			}else if (valueColor7 == 'oro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_oro_lrg.jpg') }}");
			}else if (valueColor7 == 'cafe') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_cafe_lrg.jpg') }}");
			}else if (valueColor7 == 'azulpastel') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulpastel_lrg.jpg') }}");
			}else if (valueColor7 == 'azulmarino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulmarino_lrg.jpg') }}");
			}else if (valueColor7 == 'vino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_vino_lrg.jpg') }}");
			}else if (valueColor7 == 'rojo-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo-blanco_lrg.jpg') }}");
			}else if (valueColor7 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor7 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor7 == 'negro-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro-blanco_lrg.jpg') }}");
			}else if (valueColor7 == 'verde-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde-blanco_lrg.jpg') }}");
			}else if (valueColor7 == 'rojotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojotransparente_lrg.jpg') }}");
			}else if (valueColor7 == 'rojosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojosolido_lrg.jpg') }}");
			}else if (valueColor7 == 'negrosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrosolido_lrg.jpg') }}");
			}else if (valueColor7 == 'verdetransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdetransparente_lrg.jpg') }}");
			}else if (valueColor7 == 'lilatransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilatransparente_lrg.jpg') }}");
			}else if (valueColor7 == 'lilasolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilasolido_lrg.jpg') }}");
			}else if (valueColor7 == 'verdesolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdesolido_lrg.jpg') }}");
			}else if (valueColor7 == 'negrotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrotransparente_lrg.jpg') }}");
			}
		}else if (color8.checked) {
			if (valueColor8 == 'blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_blanco_lrg.jpg') }}");
			}else if (valueColor8 == 'plata') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_plata_lrg.jpg') }}");
			}else if (valueColor8 == 'negro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro_lrg.jpg') }}");
			}else if (valueColor8 == 'azul') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul_lrg.jpg') }}");
			}else if (valueColor8 == 'rojo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo_lrg.jpg') }}");
			}else if (valueColor8 == 'verde') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde_lrg.jpg') }}");
			}else if (valueColor8 == 'amarillo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillo_lrg.jpg') }}");
			}else if (valueColor8 == 'naranja') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranja_lrg.jpg') }}");
			}else if (valueColor8 == 'azulcielo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcielo_lrg.jpg') }}");
			}else if (valueColor8 == 'morado') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_morado_lrg.jpg') }}");
			}else if (valueColor8 == 'lila') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lila_lrg.jpg') }}");
			}else if (valueColor8 == 'rosa') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosa_lrg.jpg') }}");
			}else if (valueColor8 == 'humo') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_humo_lrg.jpg') }}");
			}else if (valueColor8 == 'transparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_transparente_lrg.jpg') }}");
			}else if (valueColor8 == 'verdeclaro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdeclaro_lrg.jpg') }}");
			}else if (valueColor8 == 'gris') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_gris_lrg.jpg') }}");
			}else if (valueColor8 == 'azulcobalto') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcobalto_lrg.jpg') }}");
			}else if (valueColor8 == 'amarillofosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillofosforescente_lrg.jpg') }}");
			}else if (valueColor8 == 'naranjafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_naranjafosforescente_lrg.jpg') }}");
			}else if (valueColor8 == 'azulfosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulfosforescente_lrg.jpg') }}");
			}else if (valueColor8 == 'rosafosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rosafosforescente_lrg.jpg') }}");
			}else if (valueColor8 == 'verdefosforescente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdefosforescente_lrg.jpg') }}");
			}else if (valueColor8 == 'beige') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_beige_lrg.jpg') }}");
			}else if (valueColor8 == 'oro') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_oro_lrg.jpg') }}");
			}else if (valueColor8 == 'cafe') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_cafe_lrg.jpg') }}");
			}else if (valueColor8 == 'azulpastel') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulpastel_lrg.jpg') }}");
			}else if (valueColor8 == 'azulmarino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azulmarino_lrg.jpg') }}");
			}else if (valueColor8 == 'vino') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_vino_lrg.jpg') }}");
			}else if (valueColor8 == 'rojo-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo-blanco_lrg.jpg') }}");
			}else if (valueColor8 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor8 == 'azul-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
			}else if (valueColor8 == 'negro-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negro-blanco_lrg.jpg') }}");
			}else if (valueColor8 == 'verde-blanco') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verde-blanco_lrg.jpg') }}");
			}else if (valueColor8 == 'rojotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojotransparente_lrg.jpg') }}");
			}else if (valueColor8 == 'rojosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_rojosolido_lrg.jpg') }}");
			}else if (valueColor8 == 'negrosolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrosolido_lrg.jpg') }}");
			}else if (valueColor8 == 'verdetransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdetransparente_lrg.jpg') }}");
			}else if (valueColor8 == 'lilatransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilatransparente_lrg.jpg') }}");
			}else if (valueColor8 == 'lilasolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_lilasolido_lrg.jpg') }}");
			}else if (valueColor8 == 'verdesolido') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_verdesolido_lrg.jpg') }}");
			}else if (valueColor8 == 'negrotransparente') {				
				$("#imagen").attr("src", "{{ asset('img/escritura/'.$articulo->modelo.'/'.$articulo->modelo.'_negrotransparente_lrg.jpg') }}");
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