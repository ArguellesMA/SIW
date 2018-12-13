<?php
$servername = "localhost";
$database = "pagina";
$username = "root";
$password = "linux123";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!conn){
    die("Connection failed: " . mysqli_connect_error()); 
}

echo "Conexion exitosa";

$nomserv=$_POST['nomserv'];
$precio=$_POST['precio'];
$total=$_POST['total'];
$sql = "INSERT INTO tabla (nomserv, precio, total) VALUES ('$nomserv', '$precio', '$total')";
if (mysql_query($conn, $sql)){
    echo "Datos insertados correctamente";
}else{
    echo "Error:" .$sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>