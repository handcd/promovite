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
    .fa-heart:before {
      color: #ff0000;
    }
</style>
<body>
	<br>
	<img style="max-width:100px; margin-top: -10px;" src="{{ url('img/promovite-logo.png') }}">
    @yield('articulo')
    <div class="col-md-12 text-center">
		<label>Si desea cotizar ingrese la cantidad de artículos</label>
		<input type="text" id="txt_campo_1" onchange="sumar(this.value);" />
		<br><br>
		<span>El costo sería: </span> $<span id="spTotal"></span>
		<br><br>
		<label>O si lo desea, también puede mandar su cotización por correo electrónico</label>
		<input type="email" id="correo" onchange="" />
	</div>		
	<div class="footer">
      <div class="col-md-12 text-center">
        <div class="credits">
          <br>
          <h5 class="pull-left">
          &copy; <script>document.write(new Date().getFullYear())</script> Hecho con <i class="fa fa-heart heart" alt="love"></i> Por <a href="http://handcd.com/">HAND Creative Design</a>.</h5>
         </div>
      </div>
  </div>
</body>
<script>
	function sumar (valor) {
	    var total = 0;	
	    valor = parseInt(valor); // Convertir el valor a un entero (número).
		
	    total = document.getElementById('spTotal').innerHTML;
		
	    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
	    total = (total == null || total == undefined || total == "" || total !== 0) ? 0 : total;
		
	    /* Esta es la suma. */
	    total = (parseInt(total) + parseInt(valor))* <?=$articulo->precio_publico?>;
		var costo = total.toFixed(2);
	    // Colocar el resultado de la suma en el control "span".
	    document.getElementById('spTotal').innerHTML = costo;
	} 
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
	{{--@if ( $articulo->catalogo === 'PWD') {--}}
	function cambiarImagen(){
		@if ($articulo->catalogo === 'PWD') 
			for (var i = 1; i <= counter; i++) {
				if (eval("color" + i).checked) {
					if (eval("valueColor" + i) == 'BLANCO') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_blanco_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'plata') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_plata_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'negro') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_negro_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'azul') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azul_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'rojo') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'verde') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verde_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'amarillo') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillo_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'naranja') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_naranja_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'azulcielo') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcielo_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'morado') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_morado_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'lila') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_lila_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'rosa') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rosa_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'humo') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_humo_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'transparente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_transparente_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'verdeclaro') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verdeclaro_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'gris') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_gris_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'azulcobalto') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcobalto_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'amarillofosforescente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillofosforescente_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'naranjafosforescente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_naranjafosforescente_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'azulfosforescente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulfosforescente_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'rosafosforescente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rosafosforescente_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'verdefosforescente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verdefosforescente_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'beige') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_beige_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'oro') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_oro_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'cafe') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_cafe_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'azulpastel') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulpastel_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'azulmarino') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulmarino_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'vino') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_vino_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'rojo-blanco') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo-blanco_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'azul-blanco') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'azul-blanco') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'negro-blanco') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_negro-blanco_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'verde-blanco') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verde-blanco_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'rojotransparente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rojotransparente_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'rojosolido') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rojosolido_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'negrosolido') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_negrosolido_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'verdetransparente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verdetransparente_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'lilatransparente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_lilatransparente_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'lilasolido') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_lilasolido_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'verdesolido') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verdesolido_lrg.jpg') }}");
					}else if (eval("valueColor" + i) == 'negrotransparente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_negrotransparente_lrg.jpg') }}");
					}
				}
			}
		@else
			for (var i = 1; i <= counter; i++) {
				if (eval("color" + i).checked) {
					if (eval("valueColor" + i) == 'blanco') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_blanco.jpg') }}");
					}else if (eval("valueColor" + i) == 'plata') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_plata.jpg') }}");
					}else if (eval("valueColor" + i) == 'negro') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_negro.jpg') }}");
					}else if (eval("valueColor" + i) == 'azul') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azul.jpg') }}");
					}else if (eval("valueColor" + i) == 'rojo') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo.jpg') }}");
					}else if (eval("valueColor" + i) == 'verde') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verde.jpg') }}");
					}else if (eval("valueColor" + i) == 'amarillo') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillo.jpg') }}");
					}else if (eval("valueColor" + i) == 'naranja') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_naranja.jpg') }}");
					}else if (eval("valueColor" + i) == 'azulcielo') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcielo.jpg') }}");
					}else if (eval("valueColor" + i) == 'morado') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_morado.jpg') }}");
					}else if (eval("valueColor" + i) == 'lila') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_lila.jpg') }}");
					}else if (eval("valueColor" + i) == 'rosa') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rosa.jpg') }}");
					}else if (eval("valueColor" + i) == 'humo') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_humo.jpg') }}");
					}else if (eval("valueColor" + i) == 'transparente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_transparente.jpg') }}");
					}else if (eval("valueColor" + i) == 'verdeclaro') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verdeclaro.jpg') }}");
					}else if (eval("valueColor" + i) == 'gris') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_gris.jpg') }}");
					}else if (eval("valueColor" + i) == 'azulcobalto') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulcobalto.jpg') }}");
					}else if (eval("valueColor" + i) == 'amarillofosforescente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_amarillofosforescente.jpg') }}");
					}else if (eval("valueColor" + i) == 'naranjafosforescente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_naranjafosforescente.jpg') }}");
					}else if (eval("valueColor" + i) == 'azulfosforescente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulfosforescente.jpg') }}");
					}else if (eval("valueColor" + i) == 'rosafosforescente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rosafosforescente.jpg') }}");
					}else if (eval("valueColor" + i) == 'verdefosforescente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verdefosforescente.jpg') }}");
					}else if (eval("valueColor" + i) == 'beige') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_beige.jpg') }}");
					}else if (eval("valueColor" + i) == 'oro') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_oro.jpg') }}");
					}else if (eval("valueColor" + i) == 'cafe') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_cafe.jpg') }}");
					}else if (eval("valueColor" + i) == 'azulpastel') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulpastel.jpg') }}");
					}else if (eval("valueColor" + i) == 'azulmarino') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azulmarino.jpg') }}");
					}else if (eval("valueColor" + i) == 'vino') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_vino.jpg') }}");
					}else if (eval("valueColor" + i) == 'rojo-blanco') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rojo-blanco.jpg') }}");
					}else if (eval("valueColor" + i) == 'azul-blanco') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco.jpg') }}");
					}else if (eval("valueColor" + i) == 'azul-blanco') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_azul-blanco.jpg') }}");
					}else if (eval("valueColor" + i) == 'negro-blanco') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_negro-blanco.jpg') }}");
					}else if (eval("valueColor" + i) == 'verde-blanco') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verde-blanco.jpg') }}");
					}else if (eval("valueColor" + i) == 'rojotransparente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rojotransparente.jpg') }}");
					}else if (eval("valueColor" + i) == 'rojosolido') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_rojosolido.jpg') }}");
					}else if (eval("valueColor" + i) == 'negrosolido') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_negrosolido.jpg') }}");
					}else if (eval("valueColor" + i) == 'verdetransparente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verdetransparente.jpg') }}");
					}else if (eval("valueColor" + i) == 'lilatransparente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_lilatransparente.jpg') }}");
					}else if (eval("valueColor" + i) == 'lilasolido') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_lilasolido.jpg') }}");
					}else if (eval("valueColor" + i) == 'verdesolido') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_verdesolido.jpg') }}");
					}else if (eval("valueColor" + i) == 'negrotransparente') {				
						$("#imagen").attr("src", "{{ asset('img/'.$articulo->categoria.'/'.$articulo->catalogo.'/'.$articulo->modelo.'/'.$articulo->modelo.'_negrotransparente.jpg') }}");
					}
				}
			}	
		@endif
	}
	/*}else{
		console.log('tu mamá');
	}	*/
	//Asignación de eventos a cada bolita de color
	for (var i =  1; i <= counter; i++) {
		eval("color" + i).addEventListener('click', function () {
       		cambiarImagen();
    	});
	  
	}
</script>
</html>