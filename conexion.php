<html>

<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>
<style type="text/css">
table th {background-color: yellow; }

table tr:nth-child(odd) {background-color: grey;}

table tr:nth-child(even) {background-color: pink;}
</style>

<?php
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect('localhost', 'root', '') or die ("ERROR EN LA CONEXION");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db($conexion,'hrm') or die ( "NO HEMOS PODIDO CONECTAR A LA BASE DE DATOS" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM empleado ";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "CONSULTA NO SE HA PODIDO REALIZAR CON EXITO");
	
	//CONTRUIMOS LA TABLA CON LOS TITULOS CORRESPONDIENTES
	
	echo "<table border='2'>";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>nombre</th>";
	echo "<th>apellido</th>";
	echo "<th>edad</th>";
	echo "<th>teléfono</th>";
	echo "<th>estadocivil</th>";
	echo "<th>ccp</th>";
	echo "<th>sexo</th>";
	echo "<th>nss</th>";
	echo "<th>direccion</th>";
	echo "<th>puesto</th>";
	echo "<th>calif</th>";
	echo "</tr>";
	
	// recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['id'] . "</td>
		<td>" . $columna['nombre'] . "</td>
		<td>" . $columna['apellido'] . "</td>
		<td>" . $columna['edad'] . "</td>
		<td>" . $columna['telefono'] . "</td>
		<td>" . $columna['estadocivil'] . "</td>
		<td>" . $columna['ccp'] . "</td>
		<td>" . $columna['sexo'] . "</td>
		<td>" . $columna['nss'] . "</td>
		<td>" . $columna['direccion'] . "</td>
		<td>" . $columna['puesto'] . "</td>
		<td>" . $columna['calif'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>
</body>
</html>