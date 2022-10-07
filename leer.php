<html>
<head>
	<title>Leer.php</title>
</head>
<body>
	<?php
		$ar=fopen("facturación.txt","r") or die("No se pudo abrir el archivo...");
		while (!feof($ar)) {
		 $linea=fgets($ar);
		 $lineasalto=nl2br($linea);
		 echo $lineasalto;
		}
		fclose($ar);
	?>
	<br><a href=index.php>Volver al Inicio</a><br>
</body>
</html>
