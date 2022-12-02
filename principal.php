<?php
	session_start();
	include 'includes/conexion.php';
	
	$email = $_SESSION['name'];
	
	if(!isset($email)){
		header("location:index.php");
	}
	
	//print_r($_SESSION);
//    die("<br><br>prueba datos login");
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$result = mysqli_query($conn, "select * from usuarios where email = '$email'");
	$row = mysqli_fetch_assoc($result);

?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
	<head>
		<title>Principal</title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
    </head>
	<body>
        <div>
            <h3>Bienvenido :<?php echo $row['nombre'] ?></h2>
        </div>
		<div>
            <h3>email :<?php echo $email ?></h2>
        </div>
        <div>
            <h3>Cedula :<?php echo $row['cedula'] ?></h2>
        </div>

		<center><b><h3>CONSULTA PARQUEADEROS</h3></b></center>

		<div class="form" >
		<form action="principal.php" method="POST">
		
				<table border="1" align="center">
					<tr>
						<td><label>ZONA: </label></td>
						<td>
							<select name="zona" required >
								<option selected value="">Elija una opción</option>
								<option value="Chapinero">Chapinero</option>
								<option value="Bosa">Bosa</option>
							</select>
						</td>
						<td>
							<input type="submit" value="Filtrar">
						</td>
					</tr>
				</table>
		</form>
		</div>	
		
		<table border="0" align="center" style="text-align:center" width="800px" height="70px">
			<tr><td>
				<table border="1" align="center" style="text-align:center" width="800px" height="70px">
					<tr>
						<th width=20%>NOMBRE</td>
						<th width=20%>DIRECCION</td>
						<th width=20%>ZONA</td>
						<th width=20%>DISPONIBLES</td>				
					</tr>
					<?php
						if (empty($_POST['zona'])){ 
							$sql="select *from parqueaderos order by length(id_parq), id_parq ";
						}else{
							$zona = $_POST['zona'];
							$sql=" select *from parqueaderos where ubicacion = '$zona';";
						}
						$result= mysqli_query($conn,$sql);
						while($mostrar=mysqli_fetch_array($result)){
					?>
					<tr height=30px>
						<td><?php echo $mostrar['nombre'] ?></td>
						<td><?php echo $mostrar['direccion'] ?></td>
						<td><?php echo $mostrar['ubicacion'] ?></td>
						<td><?php echo $mostrar['disponibles'] ?></td>
					</tr>
					<?php 
						}	
					?>
				</table>
			</td></tr>
			<tr>
				<td><center><b><h3>MAPA PARQUEADEROS</h3></b></center></td>
			</tr>
			<tr>
				<td>
				<iframe src="https://www.google.com/maps/d/embed?mid=1yWWhyGt-6lGtTX-HKAvkcFhTWLoxt3I&ehbc=2E312F" width="640" height="480"></iframe>
				</td>
			</tr>
		</table>
		<br><br>
		<div>
            <input type="button" onclick="location.href='includes/cerrar_sesion.php'" value= "Cerrar Sesion">
        </div>
    </body>
</html>