<?php
	session_start();
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
	<head>
		<script  language="JavaScript">
			var salir=true;
			function cambiarvalor()
			{
				salir=false;
			}
			function antesdecerrar()
			{
				if (salir==true)
				{
					return 'Esta accion perdera los cambios hechos a la pagina si no guardas!';
				}
			}
		</script>
		<title>INGRESO SISTEMA PARQUEADERO</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
  
	<body topmargin="0" marginheight="0" onBeforeUnload="return antesdecerrar()" >  
	<?php
die("<br>fin");
		include 'info/conexion.php';	
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$ip = $_SERVER['REMOTE_ADDR'];
		
		$result = mysqli_query($conn, "select * from usuarios where email = '$email'");
		$row = mysqli_fetch_assoc($result);
		$hash = $row['contrasena'];

echo "<br><br>Result: ".$hash;
echo "<br><br>Email: ".$email;
echo "<br><br>Clave: ".$pass;

die("<br><br>prueba datos login");

		$checkUser = "select * from consulta where unube = '$_POST[user_nu]' ";
		$consult = $conn-> query($checkUser);
		$count = mysqli_num_rows($consult);
	if ($count == 1) {
			echo "<br><br>
				<table align='center' style='text-align:center' width='700px' height='70px'>
					<tr>
						<td><p>El usuario <b>$row[unube]</b> se encuentra actualmente en uso</p></td>
					</tr>
					<tr>
						<td height=150px><a href='consulta.php'>Por favor valide los usuarios disponibles</a>
					</tr>
				</table>";
		} else {	
	
		if (password_verify($_POST['password'], $hash)) {	
			$_SESSION['loggedin'] = true;
			$_SESSION['name'] = $row['unube'];
			//$_SESSION['start'] = time();
			//$_SESSION['expire'] = $_SESSION['start'] + (720 * 60) ;	
			
			mysqli_query($conn, $query);
					
			echo "<br><br>
			<table align='center' style='text-align:center' width='700px' height='70px'>
				<tr>
					<td colspan='2'><p>Actualmente esta con el usuario: $row[unube]</p></td>		
				</tr>
				<tr height=50px>
					<th colspan=2><img src='images\alerta_stick.jpg' width=50%><br><p>No olvide cerrar la sesión cuando termine de utilizar el sistema, con esto dejara disponible el usuario.</p></th>
				</tr>
				<tr height=150px>
					<td><a href='https://clusterunoee02.siesacloud.com:360/' target='_blank'>Ingreso Siesa</a></td>
					<td><a href='logout.php'>Cerrar Sesión</a></td>
				</tr>
			</table>";
		} else {
			echo "<br><br>
			<table align='center' style='text-align:center' width='700px' height='70px'>
				<tr>
					<td><p>Usuario o Contraseña Incorrectos!</td>
				</tr>
				<tr height=150px>
					<td><a href='index.php'>Por favor ingrese de nuevo</a></td>
				</tr>
			</table>";			
		}
		}	
	?>
	</body>
