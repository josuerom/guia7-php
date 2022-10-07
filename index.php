<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Foreing</title>
</head>
<body>
    <form action="factura.php" method="post">
    Nombre:
    <input type="text" name="nombre" size="40"> <br>
    Dirección:
    <input type="text" name="direccion" size="30"> <br>
    Teléfono:
    <input type="text" name="telefono" size="20"> <br>
    
    <h1>Tipo de pizza:</h1>
    Jamon y queso <input type="checkbox" name="pizza01">
    Cantidad: <input type="text" name="cantidadJamon" size="10"> <br>
    Napolitana <input type="checkbox" name="pizza02">
    Cantidad: <input type="text" name="cantidadNapo" size="10"> <br>
    Muzzarella <input type="checkbox" name="pizza03">
    Cantidad: <input type="text" name="cantidadMuzza" size="10"> <br>
	Hawaiana <input type="checkbox" name="pizza04">
    Cantidad: <input type="text" name="cantidadHawa" size="10"> <br>
    Detalles del pedido:<br>
    <textarea name="comentarios" rows="5" cols="60" ></textarea><br>
    <input type= "submit" name="enviar">
	<br><br><a href=leer.php>Leer Facturas</a><br>
	</form>
</body>
</html>
