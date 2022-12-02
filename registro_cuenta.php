<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
	<head>
		<title>REGISTRO CUENTA</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
		<?php
			include 'includes/conexion.php';

//echo "<br><br>".$dbhost;
//echo "<br><br>".$dbuser;
//echo "<br><br>".$dbpass;
//echo "<br><br>".$dbname."<br><br>";

			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$checkUser = "select * from usuarios where email = '$_POST[email]'";
		$result = $conn-> query($checkUser);
		$count = mysqli_num_rows($result);

		if ($count == 1) {
			echo "<br><br>
				<table align='center' style='text-align:center' width='700px' height='70px'>
					<tr>
						<td><p>El usuario ya existe en la base de datos</p></td>
					</tr>
					<tr>
						<td height=150px><a href='index.php'>Por favor ingrese los datos aqui</a>
					</tr>
				</table>";
		} else {	
			$email = $_POST['email'];
			$nombre = $_POST['nombre'];
			$cedula = $_POST['cedula'];
			$pass = $_POST['password'];
			$passHash = password_hash($pass, PASSWORD_DEFAULT);

//echo "<br><br>Email: ".$email;
//echo "<br><br>Nombre: ".$nombre;
//echo "<br><br>Cedula: ".$cedula;
//echo "<br><br>Pass: ".$pass;
//echo "<br><br>PassHash".$passHash."<br><br>";

//die("prueba datos mysql");
		
			$query = "insert into usuarios(email,nombre,cedula,contrasena) value ('$email','$nombre','$cedula','$passHash')";

		if (mysqli_query($conn, $query)) {
			echo "<br><br>
				<table align='center' style='text-align:center' width='700px' height='70px'>
					<tr>
						<td><p>La cuenta a sido creada</p></td>
					</tr>
					<tr>
						<td>
							<br><br>Email: $email
							<br><br>Nombre: $nombre
							<br><br>Cedula: $cedula
						</td>
					</tr>
					<tr>
						<td height=150px><a href='index.php'>Ingresar</a></td>
					</tr>
				</table>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}	
		}	
		mysqli_close($conn);
		?>
	</body>
</html>