<?php
$servername = "localhost";
$database = "";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!conn){
    die("Connection failed: " . mysqli_connect_error()); 
}

echo "Conexion exitosa";

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$ciudad=$_POST['ciudad'];
$estado=$_POST['estado'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];

$sql = "INSERT INTO tabla (nombre, apellidos, ciudad, estado, email, contraseña) VALUES ('$nombre', '$apellidos', '$ciudad', '$estado', '$email', '$contraseña')";
if (mysql_query($conn, $sql)){
    echo "Datos insertados correctamente";
}else{
    echo "Error:" .$sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>