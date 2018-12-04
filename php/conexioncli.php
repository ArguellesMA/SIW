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
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidosm'];
$edad=$_POST['edad'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$telefono=$_POST['telefono'];
$telcon1=$_POST['telcon1'];
$telcon2=$_POST['telcon2'];
$sangre=$_POST['sangre'];
$discapacidad=$_POST['discapacidad'];
$hospital=$_POST['hospital'];

$sql = "INSERT INTO tabla (nombre, apellidop, apellidom, edad, direccion, sexo, telefono, telcon1, telcon2, sangre, discapacidad, hospital) VALUES ('$nombre', '$apellidop', '$apellidom', '$edad', '$direccion', '$sexo', '$telefono', '$telcon1', '$telcon2', '$sangre', '$discapacidad', '$hospital')";
if (mysql_query($conn, $sql)){
    echo "Datos insertados correctamente";
}else{
    echo "Error:" .$sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>