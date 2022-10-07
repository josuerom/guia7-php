<html>
<head>
	<title>Factura.php</title>
</head>
<body>
	<?php
		$nombre = $_REQUEST['nombre'];
		$direccion = $_REQUEST['direccion'];
		$telefono = $_REQUEST['telefono'];
		$cantidadJamon = $_REQUEST['cantidadJamon'];
		$cantidadNapo = $_REQUEST['cantidadNapo'];
		$cantidadMuzza = $_REQUEST['cantidadMuzza'];
		$cantidadHawa = $_REQUEST['cantidadHawa'];
		$comentarios = $_REQUEST['comentarios'];
		
		$ar=fopen("facturación.txt","a") or die("Sea presentado un problemas en la creación de la factura...");
		fputs($ar,"Nombre del cliente: $nombre");
		fputs($ar,"\n");
		fputs($ar,"Domicilio: $direccion");
		fputs($ar,"\n");
		fputs($ar,"Teléfono: $telefono");
		fputs($ar,"\n");
		
		fputs($ar, "Cantidad de Pizzas con Jamón y Queso: $cantidadJamon");
		fputs($ar,"\n");
		fputs($ar, "Cantidad de Pizzas Napolitanas: $cantidadNapo");
		fputs($ar,"\n");
		fputs($ar, "Cantidad de Pizzas Muzzarella: $cantidadMuzza");
		fputs($ar,"\n");
		fputs($ar, "Cantidad de Pizzas Hawaianas: $cantidadHawa");
		fputs($ar,"\n");
		fputs($ar, "Detalles de la compra: $comentarios");
		fputs($ar,"\n");
		fputs($ar,"--------------------------------------------------------");
		fputs($ar,"\n");
		fclose($ar);
		echo "Los datos suministrados se cargaron correctamente en el servidor, gracias.";
	?>
	<br><a href=index.php>Volver al Inicio</a><br>
</body>
</html>
