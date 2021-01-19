<?php
session_start();

 


$conn = mysqli_connect("localhost","liondigi_agenda","Martin24","liondigi_agendaderma");
//Getting Input value
if(isset($_POST['login'])){
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
 // $password = md5($password); 
  if(empty($username)&&empty($password)){
  $error= 'Fileds are Mandatory';
  }else{
	  
	       $username=mysqli_real_escape_string($conn,$_POST['username']);  
           $password=mysqli_real_escape_string($conn,$_POST['password']);  
           //$password = md5($password); 
	  
 //Checking Login Detail
 $result=mysqli_query($conn,"SELECT*FROM sc_usuarios WHERE username='$username' AND password='$password'");
 
 //$num=mysqli_fetch_array($result);
 
 
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);
 if($count==1){
	 
   //$_SESSION['sc_usuarios'] = $username; // hold the user name in session 
   //$_SESSION['id']=$num['id']; // hold the user id in session
   // IP Address
   //$ip_address = $_SERVER['REMOTE_ADDR'];
   
   //mysqli_query($con,"insert into sc_inspector_userlog(userId,username,userIp,action) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$action')")
	 
   $_SESSION['sc_usuarios']=array(
   'username'=>$row['username'],
   'password'=>$row['password'],
   'role'=>$row['role']
   );
   $role=$_SESSION['sc_usuarios']['role'];
   //Redirecting User Based on Role
    switch($role){
  case 'enfermero(a)':
  header('location:user.php');
  break;
  case 'medico':
  header('location:moderator.php');
  break;
  case 'admin':
  header('location:pages/dashboard.php');
  break;
 }
 }else{
 $error='Your PassWord or UserName is not Found';
 }
}
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema Clinico</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Sistema Clinico</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

 

<form method="POST" action="">
      <div class="form-group has-feedback">
		<input type="text" name="username" class="form-control" placeholder="Username">
         <span class="glyphicon form-control-feedback">
		 <i class="fa fa fa-users"></i>
		 </span>
      </div>
      <div class="form-group has-feedback">
         <input type="password" name="password" class="form-control" placeholder="Password"> 
       <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	  
	  <div class="form-group has-feedback">
         
		  <input type="submit" name="login" class="btn btn-primary btn-block btn-flat" value="Entrar a Sistema Clinico">
		 
        </div>
	  
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
    </form>
	
	<div class="social-auth-links text-center">
        <?php if(isset($error)){ echo $error; }?>
    </div>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="#" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
