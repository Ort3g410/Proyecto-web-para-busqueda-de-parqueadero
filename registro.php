<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
	<head>
		<title>REGISTRO CUENTA</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="form">
			<br><br>
			<center><b><h3>REGISTRO USUARIO</h3></b></center>
			<form action="registro_cuenta.php" method="POST">
			<fieldset>
				<legend align="right">WOLFPARQUIN</legend>
					<table border="1" align="center" width="600px" height="100px">
					<tr>
					<td><label>EMAIL: </label></td>
					<td><input type="email" name="email" placeholder="email" required></td>
					</tr>
					<tr>
					<td><label>NOMBRE: </label></td>
					<td><input type="text" name="nombre" placeholder="nombre" required></td>
					</tr>
					<tr>
					<td><label>CEDULA: </label></td>
					<td><input type="text" name="cedula" placeholder="cedula" required></td>
					</tr>
					<tr>
					<td><label>CONTRASEÑA: </label></td>
					<td><input type="password" name="password" placeholder="Contraseña" required></td>
					</tr>
					</table>
			</fieldset>
			<table align="center" style="text-align:center;" width="600px" height="100px">
				<tr>
					<td>
						<input type="submit" value="Crear">
					</td>
					<td>
						<input type="reset" value="Borrar">
					</td>
					<td>
						<input type="button" onclick="location.href='index.php'" value= Regresar>
					</td>
				</tr>
			</table>
	</body>
</html>