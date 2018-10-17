<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
</head>

<body>
	<center>
	<header> CONSULTA A LA BASE DE DATOS </header>

		<center>
			<table>
				<thead>
					
					<tr>
						<th> RFC </th>
						<th> NOMBRE  </th>
                        			<th> APELLIDOS</th>
                        			<th>NUMERO EMPLEADOS</th>
                        			<th>CURP</th>
                        			<th>LOCALIDAD</th>
                        			<th>CODIGO POSTAL</th>
                        			<th>MINUCIPIO</th>
                        			<th>ENTIDAD FEDEREATIVA</th>
                        			<th>SALARIO</th>
                        			<th>JORNADA</th>
                        			<th>PUESTO</th>
                        			<th>FECHA NACIMIENTO</th>
                        			<th>ESTADO CIVIL</th>
                        			<th>TELEFONO</th>

					</tr>
				</thead>
				<tbody>
					
					<?php
						include("conexion.php");

						$query="SELECT * from form";
						$resultado=$conexion->query($query);
						while ($row=$resultado->fetch_assoc()) {
					?>
					
					<tr>
						<td><?php echo $row['rfc']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
                        			<td><?php echo $row['apellidos']; ?></td>
                        			<td><?php echo $row['numemp']; ?></td>
                        			<td><?php echo $row['curp']; ?></td>
                        			<td><?php echo $row['localidad']; ?></td>
                        			<td><?php echo $row['postal']; ?></td>
                        			<td><?php echo $row['municipio']; ?></td>
                        			<td><?php echo $row['entidad']; ?></td>
                        			<td><?php echo $row['salario']; ?></td>
                       			 	<td><?php echo $row['jornada']; ?></td>
                        			<td><?php echo $row['puesto']; ?></td>
                        			<td><?php echo $row['nacimiento']; ?></td>
                        			<td><?php echo $row['civil']; ?></td>
                        			<td><?php echo $row['telefono']; ?></td>

						
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</center>
	
	</center>
</body>
</html>
