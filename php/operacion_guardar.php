<?php 
include("conexion.php");

        $rfc = $_POST['rfc'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $numemp = $_POST['numemp'];
        $curp = $_POST['curp'];
        $localidad = $_POST['localidad'];
        $postal = $_POST['postal'];
        $municipio = $_POST['municipio'];
        $entidad = $_POST['entidad'];
        $salario = $_POST['salario'];
        $jornada = $_POST['jornada'];
        $puesto = $_POST['puesto'];
        $nacimiento = $_POST['nacimiento'];
        $civil = $_POST['civil'];
        $telefono = $_POST['telefono'];

    $query="INSER INTO form(rfc, nombre, apellidos, numemp, curp, localidad, postal, municipio, entidad, salario, jornada, puesto, nacimiento, civil, telefono) VALUES ('$rfc', '$nombre', '$apellidos', '$numemp'$, '$curp', '$localidad', '$postal', '$municipio', '$entidad', '$salario', '$jornada', '$puesto', '$nacimiento', '$civil', '$telefono')";    
    
    $resultado= $conexion->query($query);
	
	if ($resultado) {
		echo "Insercion exitosa";
		
			header("location: consulta_tabla.php");
		
	}
	else{
		echo "Insercion No exitosa ";
	}
?>   