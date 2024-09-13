<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar datos</title>
</head>
<body>
<?php
$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "formulario.323";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexión");

$Nombre = $_POST['Nombre'];
$correo= $_POST['correo'];
$telefono = $_POST['telefono'];

$insertar = "INSERT into real_pasion values ('$Nombre', '$correo', '$telefono')";

if (mysqli_query($conexion, $insertar)){
    header("Location: index.html");
}else{
    echo "error" . mysqli_error($conexion);
}

mysqli_close($conexion);
echo "Datos insertados correctamente.";
?>
</body>
</html>