<?php
   session_start();
	$host="localhost";
	$user="root";
	$pass="";
	$database="dbbiblioteca";

    $username ="";
    $email ="";
    $errors = array();

  //conectcion con mysql
   $db = new mysqli($host,$user,$pass,$database);
   if (mysqli_connect_errno()) {
      echo "error al conectar";
      exit();
     # code...
   }
   if (isset($_POST['register'])) {

   	$username = $db->real_escape_string($_POST['username']);
   	$email = $db->real_escape_string($_POST['email']);
   	$password_1 = $db->real_escape_string($_POST['password_1']);
   	$password_2 = $db->real_escape_string($_POST['password_2']);

   	# code...

   	if (empty($username)) {
   		array_push($errors, "Username is requiered");
   		
   	}
   	   	if (empty($email)) {
   		array_push($errors, "email is requiered");
   		
   	}
   	   	if (empty($password_1)) {
   		array_push($errors, "password is requiered");
   		
   	}
   	   	if ($password_1 != $password_2) {
   		array_push($errors, "La contraseña no coincide");
   		
   	}
   	if (count($errors)==0) {
   		$password = md5($password_1);
   		$sql="INSERT INTO usuarios(username,email,password)VALUES('$username','$email','$password')";
   		# code...
   		$db->query($sql);

   	   $_SESSION['username']=$username;
   	   $_SESSION['success']="You are now loggen in";
   	   header('location: index.php');
  	}
  }

  	if (isset($_POST['login'])) {

			
		// $username = $db->real_escape_string($_POST['username']);
		// $password = $db->real_escape_string($_POST['password']);

		$username = $_POST["username"];
		$password = $_POST["password"];
		# code...
		if (empty($username)) {
			array_push($errors, "campo username es requerido");
			
		}
		if (empty($password)) {
			array_push($errors, "campo pasword es requerido");
			
		}
		if (count($errors) == 0) {
			//$password=md5($password);//ecriptado 
			$query = "SELECT *FROM usuarios WHERE username='$username' AND password='$password'";
		$result = $db->query($query);
		if ($result->num_rows > 0 ){
		$_SESSION['username']=$username;
		$_SESSION['success']="You are now loggen in";
		header('location:principal.php');
			
		}else{

				array_push($errors, "El nombre de usuario o contraseñason incorrectos");
			//header('location: login.php');
				}

		}

  	}

      //logout

    if (isset($GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header('location:login.php');
    }  
?>