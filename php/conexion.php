<?php
$conexion=mysqli_connect("localhost", "root", "root", "form");

if($conexion){
echo "Conexion Exitosa";
}else{
    echo "Error de Conexion";
}    
?>  