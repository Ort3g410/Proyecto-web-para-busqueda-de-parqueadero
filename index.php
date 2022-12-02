<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
<head>
<title>WolfParquin</title>
 <link href="css\style.css" rel="stylesheet" type="text/css">


</head>
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <a href="#" class="enlace">
        <img src="img\logo.png" alt="" class="logo">
    </a>
    <ul>
        <li><a class="#" href="#">Quienes somos</a></li>
        <li><a href="registro.php">Registrate</a></li>
        
    </ul>
</nav>
<!--<section></section>-->
<body>
   <br><br>
<!--<div class="loginbox">
    <img src="img\imagen.png" alt="" class="avatar">
    <h1>Login</h1>
    <form=""></form>
    <p>Username</p>
    <input type="text" placeholder="Username">
    <p>Password</p>
    <input type="text" placeholder="Password">
    <input type="submit" value="Login">
    </div>
-->

	<div class="form" >
		<br><br>
		<b><h3>INGRESO USUARIO</h3></b>
		<form action="login.php" method="POST">
		
				<table border="1" align="center" width="600px" height="100px">
					<tr>
					<td><label>EMAIL: </label></td>
					<td><input type="email" name="email" placeholder="email" required></td>
					</tr>
					<tr>
					<td><label>CONTRASEÑA: </label></td>
					<td><input type="password" name="password" placeholder="Contraseña" required></td>
					</tr>
				</table>
		
		<table border="1" align="center" style="text-align:center;" width="600px" height="100px">
			<tr>
				<td>
					<input type="submit" value="Ingresar">
				</td>
				<td>
					<input type="reset" value="Borrar">
				</td>
			</tr>
		</table>
	</form>
	</div>	
		

</body>


</html>


