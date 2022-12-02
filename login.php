<?php
    session_start();

    include 'includes/conexion.php';
	
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $result = mysqli_query($conn, "select * from usuarios where email = '$email'");
    $row = mysqli_fetch_assoc($result);
   
    if (empty($row)){
        $mensaje = "<stronge>Ingreso Erroneo!, por favor valide las credenciales de ingreso  - Cuenta no registrada</stronge>";
        //die("<br>dentro if");
    }else{
        
    $hash = $row['contrasena'];

    //echo "<br><br>Hash: ".$hash;
    //echo "<br><br>Email: ".$email;
    //echo "<br><br>Clave: ".$pass;
    //echo "<br><br>Ip: ".$ip;
    //die("<br>prueba jjgr");
        if (password_verify($pass, $hash)) {
            $_SESSION['login'] = true;
            $_SESSION['name'] = $row['email'];
            print_r($_SESSION);    
            header("location:principal.php");
            $mensaje = "Ingreso Correcto";
        }else{
            $mensaje = "<stronge>Ingreso Erroneo!, por favor valide las credenciales de ingreso </stronge>";
        }
    }

?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
	<head>
		<title>Login Erroneo</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        <div>
            <?php echo $mensaje; ?>
        </div>
        <div>
            <br><br>
            <input type="button" onclick="location.href='index.php'" value= Regresar>
        </div>
    </body>
</html>
