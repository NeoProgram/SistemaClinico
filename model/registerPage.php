<?php  
 $conn = mysqli_connect("localhost","liondigi_agenda","Martin24","liondigi_agendaderma");
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:dashboard.php");  
 }  
 if(isset($_POST["reg_usuario"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($conn, $_POST["username"]);  
           $password = mysqli_real_escape_string($conn, $_POST["password"]);  
           $password = md5($password);  
           $query = "INSERT INTO sc_usuarios (username, 
		                                      password,
											  estatus_usuario,
											  apellido_paterno,
											  apellido_materno,
											  primer_nombre,
											  segundo_nombre,
											  curp,
											  telefono,
											  celular,
											  whatsapp,
											  email,
											  usuario_registra,
											  fecha_reg_usuario,
											  role) 
		                              VALUES ('$username', 
									          '$password'),
											  '$estatus_usuario'),
											  '$apellido_paterno'),
											  '$apellido_materno'),
											  '$primer_nombre'),
											  '$segundo_nombre'),
											  '$curp'),
											  '$telefono'),
											  '$celular'),
											  '$whatsapp'),
											  '$email'),
											  '$usuario_registra'),
											  '$fecha_reg_usuario'),
											  '$role'),";  
		   
		   
		   
           if(mysqli_query($conn, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($conn, $_POST["username"]);  
           $password = mysqli_real_escape_string($conn, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM sc_usuarios WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($conn, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['username'] = $username;  
                header("location:dashboard.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
 ?>  