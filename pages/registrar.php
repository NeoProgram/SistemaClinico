<?php 

session_start();



//Checking User Logged or Not
if(empty($_SESSION['sc_usuarios'])){
 header('location:../login.php');
}
//Restrict User or Moderator to Access Admin.php page
if($_SESSION['sc_usuarios']['role']=='user'){
 header('location:user.php');
}
if($_SESSION['sc_usuarios']['role']=='moderator'){
 header('location:moderator.php');
}


include '../model/server.php';
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
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  
  <!-- daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  
  <!-- Sistema Clinico CSS -->
  <link rel="stylesheet" href="../dist/css/sistemaClinico.css">
  
   

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  
  
  
  
  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo" style="position:fixed;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>C</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sistema</b>Clinico</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['sc_usuarios']['username'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['sc_usuarios']['username'];?> - Your Role is : <?php echo $_SESSION['sc_usuarios']['role'];?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="position:fixed;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['sc_usuarios']['username'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
        </li>
        
        <li>
          <a href="clinicas.php">
            <i class="fa fa-plus-square"></i>
            <span>Clinica</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
        </li>
		
		<li>
          <a href="medicos.php">
            <i class="fa fa-user-md"></i>
            <span>Medicos</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
        </li>
		
		<li>
          <a href="pacientes.php">
            <i class="fa fa-user-plus"></i>
            <span>Pacientes</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
          
        </li>
		<li>
          <a href="usuarios.php">
            <i class="fa fa fa-users"></i>
            <span>Usuarios</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
          
        </li>
		<li class="active">
          <a href="registrar.php">
			<i class="fa fa-address-book"></i>
            <span>Registrar</span>
          </a>
          
		<li>
          <a href="crearCita.php">
            <i class="fa fa-calendar-plus-o"></i> <span>Crear Cita</span>
			<span class="pull-right-container">
            <small class="label pull-right bg-blue">16</small>
			</span>
          </a>
        </li>
		<li>
          <a href="listadoCitas.php">
            <i class="fa fa-list-ul"></i> <span>Listado de Citas</span>
			<span class="pull-right-container">
            <small class="label pull-right bg-blue">28</small>
			</span>
          </a>
        </li>
        <li>
          <a href="calendar.php">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="mailbox/mailbox.php">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Formularios de Registro
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Registros</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	  
	 <!-- Formulario de Registro de Medico -->
	  
	  <div class="box"><!-- put it back (collapsed-box) -->
            <div class="box-header with-border">
              
			  <i class="fa fa-clipboard"></i>
              
			  <h1 class="box-title"><b>Formulario de Registro de Medico</b></h1>
            
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              
				<!-- Registrar Medico Box -->
				
<div class="register-box perfilMedico">
  <div class="register-logo">
    <b>Registrar Medico</b>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registrar un nuevo Medico</p>

    <form method="post"> 
	
	<div class="form-group has-feedback" style="display: none;">
	  <label>date_date:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="date_date" value="<?php echo $_SESSION['sc_medicos']['total_days'];?>" name="total_days">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
    </div>
	
	<div class="form-group has-feedback" style="display: none;">
	  <label>Usuario que Registra:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="Usuario que Registra" value="<?php echo $_SESSION['sc_usuarios']['username'];?>" name="usuario_registra">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
    </div>
	
	<div class="form-group has-feedback" style="display: none;">
	  <label>Fecha de Registro del Medico:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="Fecha de Registro del Medico" value="" name="fecha_reg_medico">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
     </div>
	 
	 <div class="form-group has-feedback" style="display: none;">
	  <label>Date Exact Reg:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="Date Exact Reg" value="" name="date_exact_reg">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	  <div class="form-group has-feedback" style="display: none;">
	  <label>IP Address:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="IP Address" value="" name="ip_address">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	   <div class="form-group has-feedback" style="display: none;">
	  <label>User Device:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="User Device" value="" name="user_device">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	  
	  <div class="form-group has-feedback">
	  <label>Medicos en Sistema Clinico:</label>
        <input type="text" class="form-control" placeholder="Medicos en SC" name="medicos_sc">
        <span class="form-control-feedback"><i class="fa fa-user-md"></i></span>
      </div>
	
	<!-- Clinicas -->
	  <div class="form-group">
                  <label>Clinicas: Elija la Clinica correspondiente</label>
                  <select class="form-control" name="clinica_id" id="clinica_name">
                    <option value="1">Racderma Satelite</option>
                    <option value="2">Racderma Reforma</option>
                    <option value="3">Racderma Insurgentes</option>
                    <option value="4">Dermaarte Polanco</option>
                    <option value="5">Dermaarte Satelite</option>
					<option value="6">Dermaarte Coyoacan</option>
                  </select>
       </div>
	   <!-- Medico Estatus -->
	  <div class="form-group">
                  <label>Medico Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus" name="estatus_medico">
                       <option class="greenText form-control activoGreen1" value="1" ><h1>Activo</h1></option>
                       <option class="redText form-control inactivoRed1"   value="0" >Inactivo</option>
                  </select>
                </div>
      <div class="form-group has-feedback">
	  <label>Nombre Completo:</label>
        <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellido_paterno">
        <span class="form-control-feedback"><i class="fa fa-male"></i></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Apellido Materno" name="apellido_materno">
        <span class="form-control-feedback"><i class="fa fa-female"></i></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Primer Nombre" name="primer_nombre">
		<span class="form-control-feedback"><i class="fa fa-user-md"></i></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Segundo Nombre" name="segundo_nombre">
        <span class="form-control-feedback"><i class="fa fa-user-md"></i></span>
      </div>
	  
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Cedula Pro No" name="cedula_pro">
        <span class="form-control-feedback"><i class="fa fa-id-card-o"></i></span>
      </div>
	  
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="WhatsApp" name="whatsapp">
        <span class="form-control-feedback"><i class="fa fa-whatsapp"></i></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
	  
	  <div class="form-group">
                  <label>Notas</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." style="margin: 0px -7.5px 0px 0px; height: 100px; width: 320px; resize: none;" name="notas"></textarea>
      </div>
	  
	  <div class="form-group has-feedback">
	    <label>Crear Username:</label>
        <input type="text" class="form-control" placeholder="Crear Username" name="username">
        <span class="form-control-feedback"><i class="fa fa-user-md"></i></span>
      </div>
	  
	  
	  <div class="form-group"><!-- Flat green skin radio -->
	  <div class="form-group has-feedback"><!-- Medico Calendario: -->
	  <label>Medico Calendario: Escoja el # de Dias o Dias por Semana</label>
	        <br><br>
	       
		         <label>
                  <input type="radio" name="choose_radio_days" class="flat-red" value="No_de_dias"> &nbsp; # de Dias
                </label>
				
		<div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Inserte el # de Dias" name="numero_dias">
        <span class="form-control-feedback"><i class="fa fa-calendar"></i></span>
		</div>
		
		
		
	  </div><!-- Medico Calendario - END -->
	  
	  
	  
	  <div class="form-group has-feedback">
	          <div class="form-group has-feedback">
	            <label>
                  <input type="radio" name="choose_radio_days" class="flat-red" value="dias_x_semana"> &nbsp; # Semanal
                </label>
	          </div>
	        <!-- checkbox -->
              <div class="form-group">
			     <div class="form-group has-feedback">
                   <label>
                     <input type="checkbox" id="inlineCheckbox1" name="my_checkbox[]" value="Sunday" class="minimal">
					 <!-- If you want the box checked, put checked back to input at the end-->
					 Domingo
                   </label>
				 </div>
				 <div class="form-group has-feedback">
                   <label>
                     <input type="checkbox" id="inlineCheckbox2" name="my_checkbox[]" value="Monday" class="minimal">
					 Lunes
                   </label>
                 </div>
				 <div class="form-group has-feedback">
                   <label>
                     <input type="checkbox" id="inlineCheckbox3" name="my_checkbox[]" value="Tuesday" class="minimal">
					 Martes
                   </label>
                 </div>
				 <div class="form-group has-feedback">
                   <label>
                     <input type="checkbox" id="inlineCheckbox4" name="my_checkbox[]" value="Wednesday" class="minimal">
					 Miercoles
                   </label>
                 </div>
				 <div class="form-group has-feedback">
                   <label>
                     <input type="checkbox" id="inlineCheckbox5" name="my_checkbox[]" value="Thursday" class="minimal">
					 Jueves
                   </label>
                 </div>
				 <div class="form-group has-feedback">
                   <label>
                     <input type="checkbox" id="inlineCheckbox6" name="my_checkbox[]" value="Friday" class="minimal">
					 Viernes
                   </label>
                 </div>
				 <div class="form-group has-feedback">
                   <label>
                     <input type="checkbox" id="inlineCheckbox7" name="my_checkbox[]" value="Saturday" class="minimal">
					 Sabado
                   </label>
                 </div>
              </div>
	  
      </div>
	             
      </div><!-- Flat green skin radio - END --> 
	  
	  <!-- Fecha de Nacimiento -->
              <div class="form-group">
                <label>Fecha de Inicio:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
<input type="text" class="form-control pull-right" id="datepicker1" name="start_date" value="<?php echo $start_date; ?>">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
			  
	   <!-- Fecha de Nacimiento -->
              <div class="form-group">
                <label>Fecha Final:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
<input type="text" class="form-control pull-right" id="datepicker2" name="end_date" value="<?php echo $end_date; ?>">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
	  
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div>
		  <a href="dashboard.php">
		  <button type="button" class="btn btn-block btn-primary" name="reg_medico">Registrar Medico</button>
		  </a>
		  <br>
		  
		  <div>
				<a href="dashboard.php">
				<button type="button" class="btn btn-block btn-danger">Cancelar</button>
				</a>
		  </div>
		  
        </div>
        <!-- /.col -->
      </div>
	  
    </form>

  </div><!-- /.form-box -->
  
</div><!-- /.register-box --><!-- /.row -->

</div><!-- ./box-body -->
            
</div>
	 
	  <!-- End of Formulario de Registro de Medico -->
	  
	  <!-- Formulario de Registro de Paciente -->
	  
	 <div class="box collapsed-box"><!-- put it back (collapsed-box) -->
            <div class="box-header with-border">
              
			  <i class="fa fa-clipboard"></i>
              
			  <h1 class="box-title"><b>Formulario de Registro de Paciente</b></h1>
            
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              
				<!-- Registrar Paciente Box -->
				
<div class="register-box perfilMedico">
  <div class="register-logo">
    <b>Registrar Paciente</b>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registrar un nuevo Paciente</p>

    <form method="post">
	<?php //include('errors.php'); ?>
	  <div class="form-group has-feedback" style="display: none;">
	  <label>Usuario que Registra:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="Usuario que Registra" value="<?php echo $_SESSION['sc_usuarios']['username'];?>" name="usuario_registra">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	   <div class="form-group has-feedback" style="display: none;">
	  <label>Fecha de Registro del Paciente:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="Fecha de Registro del Paciente" value="" name="fecha_reg_paciente">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	  <div class="form-group has-feedback" style="display: none;">
	  <label>Date Exact Reg:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="Date Exact Reg" value="" name="date_exact_reg">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	  <div class="form-group has-feedback" style="display: none;">
	  <label>IP Address:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="IP Address" value="" name="ip_address">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	   <div class="form-group has-feedback" style="display: none;">
	  <label>User Device:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="User Device" value="" name="user_device">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	  
	  <!-- Clinicas -->
	  <div class="form-group">
                  <label>Clinicas Elija la Clinica correspondiente:</label>
                  <select class="form-control" name="clinica_id">
                    <option value="1">Racderma Satelite</option>
                    <option value="2">Racderma Reforma</option>
                    <option value="3">Racderma Insurgentes</option>
                    <option value="4">Dermaarte Polanco</option>
                    <option value="5">Dermaarte Satelite</option>
					<option value="6">Dermaarte Coyoacan</option>
                  </select>
       </div>
	  
	  <!-- Medio por el cual se Registra -->
	  <div class="form-group">
                  <label>Elija el Medio por el cual se Registra:</label>
                  <select class="form-control" name="medio_registro">
                    <option value="1">Facebook</option>
                    <option value="2">Whatsapp</option>
                    <option value="3">Recepcion/Telefono</option>
					<option value="4">Instagram</option>
                    <option value="5">Correo Electronico</option>
                    <option value="6">Hotspot</option>
					<option value="7">livebeep</option>
                  </select>
       </div>
	   
	  <!-- <div class="form-group has-feedback">
	  <label>Paciente No:</label>
        <input type="text" class="form-control" placeholder="Paciente No">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div> -->
      <div class="form-group has-feedback">
	  <label>Nombre Completo:</label>
        <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellido_paterno">
        <span class="form-control-feedback"><i class="fa fa-male"></i></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Apellido Materno" name="apellido_materno">
        <span class="form-control-feedback"><i class="fa fa-female"></i></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Primer Nombre" name="primer_nombre">
        <span class="form-control-feedback"><i class="fa fa-user-plus"></i></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Segundo Nombre" name="segundo_nombre">
        <span class="form-control-feedback"><i class="fa fa-user-plus"></i></span>
      </div>
	  
	  <div class="form-group has-feedback">
	  <label>Informacion de Contacto:</label>
        <input type="text" class="form-control" placeholder="Telefono" name="telefono">
        <span class="form-control-feedback"><i class="fa fa-phone-square"></i></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Celular" name="celular">
        <span class="form-control-feedback"><i class="fa fa-mobile"></i></span>
      </div>
	 
	  <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
	  
	  <div class="form-group">
                  <label>Notas</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." style="margin: 0px -7.5px 0px 0px; height: 100px; width: 320px; resize: none;" name="notas"></textarea>
      </div>
	  
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div>
		  
		  <button type="submit" class="btn btn-block btn-primary" name="reg_paciente">Registrar Paciente</button>
		  
		  <br>
		  
		  <div>
				<a href="dashboard.php">
				<button type="button" class="btn btn-block btn-danger">Cancelar</button>
				</a>
		  </div>
		  
        </div>
        <!-- /.col -->
      </div>
	  
    </form>

  </div><!-- /.form-box -->
  
</div><!-- /.register-box --><!-- /.row -->

</div><!-- ./box-body -->
            
          </div>
	  <!-- End of Formulario de Registro de Paciente -->
	  
	  <!-- Formulario de Registro de Usuario -->
	  
	  <div class="box collapsed-box"><!-- put it back (collapsed-box) -->
            <div class="box-header with-border">
              
			  <i class="fa fa-clipboard"></i>
              
			  <h1 class="box-title"><b>Formulario de Registro de Usuario</b></h1>
            
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              
				<!-- Registrar Medico Box -->
				
<div class="register-box perfilMedico">
  <div class="register-logo">
    <a href="../index.html"><b>Registrar Usuario</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registrar un nuevo Usuario</p>

    <form method="post">
	
	<div class="form-group has-feedback" style="display: none;">
	  <label>Usuario que Registra:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="Usuario que Registra" value="<?php echo $_SESSION['sc_usuarios']['username'];?>" name="usuario_registra">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	
	<div class="form-group has-feedback" style="display: none;">
	  <label>Fecha de Registro del Usuario:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="Fecha de Registro del Medico" value="" name="fecha_reg_usuario">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	  
	  <div class="form-group has-feedback" style="display: none;">
	  <label>Date Exact Reg:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="Date Exact Reg" value="" name="date_exact_reg">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	  <div class="form-group has-feedback" style="display: none;">
	  <label>IP Address:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="IP Address" value="" name="ip_address">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	   <div class="form-group has-feedback" style="display: none;">
	  <label>User Device:</label>
        <input type="text" readonly="readonly" class="form-control" placeholder="User Device" value="" name="user_device">
        <span class="form-control-feedback"><i class="fa fa-address-card"></i></span>
      </div>
	  
	  <!-- Medico Estatus -->
	  <div class="form-group">
                  <label>Usuario Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus" name="estatus_usuario">
                       <option class="greenText form-control activoGreen1" value="1" ><h1>Activo</h1></option>
                       <option class="redText form-control inactivoRed1"   value="0" >Inactivo</option>
                  </select>
       </div>
	   
	   <!-- Rol del Usuario -->
	   <div class="form-group">
                  <label>Rol del Usuario:</label>
                  <select class="form-control" name="role">
                    <option>admin</option>
                    <option>medico</option>
                    <option>enfermero(a)</option>
                  </select>
       </div>
	
      <div class="form-group has-feedback">
	  <label>Nombre Completo:</label>
        <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellido_paterno">
        <span class="form-control-feedback"><i class="fa fa-male"></i></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Apellido Materno" name="apellido_materno">
        <span class="form-control-feedback"><i class="fa fa-female"></i></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Primer Nombre" name="primer_nombre">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Segundo Nombre" name="segundo_nombre">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
	 
	  <div class="form-group has-feedback">
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="WhatsApp" name="whatsapp">
        <span class="form-control-feedback"><i class="fa fa-whatsapp"></i></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
	  
	   <div class="form-group has-feedback">
	    <label>Crear Username:</label>
        <input type="text" class="form-control" placeholder="Crear Username" name="username">
        <span class="form-control-feedback"><i class="fa fa-male"></i></span>
      </div>
	  
      <div class="form-group has-feedback">
	  <label>Crear Contasena:</label>
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div>
		  
		  <button type="submit" class="btn btn-block btn-primary" name="reg_usuario">Registrar Usuario</button>
		  
		  <br>
		  
		  <div>
				<a href="dashboard.php">
				<button type="button" class="btn btn-block btn-danger">Cancelar</button>
				</a>
		  </div>
		  
        </div><!-- /.col -->
		
      </div>
	  
    </form>

  </div><!-- /.form-box -->
  
</div><!-- /.register-box --><!-- /.row -->

            </div><!-- ./box-body -->
            
          </div>
<!-- End of Formulario de Registro de Usuario -->
		    
       </div><!-- /.row --><!-- ./box-body -->
            
</div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>© Powered by 2019 Lion Digital MX. <a href="#"> Sistema Clinico</a>.</strong> Todos los Derechos Reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>


<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- fullCalendar -->
<script src="../bower_components/moment/moment.js"></script>
<script src="../bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

<!-- bootstrap-datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>

<script src="../dist/js/iconify.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
	  defaultView: 'agendaDay',
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954' //red
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
<!-- Data Table ( Citas ) -->
<script>
  $(function () {
  
    
	
	/* $("#datepicker1").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#datepicker1").datepicker( "option", "minDate", minValue );
	
	})
	
	$("#datepicker2").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#datepicker2").datepicker( "option", "minDate", minValue );
	
	}) */
  
    //Date picker ( start_date )
    $('#datepicker1').datepicker({
      autoclose: true,
	  format: 'yyyy/mm/dd'
    })
	
	//Date picker ( end_date )
    $('#datepicker2').datepicker({
      autoclose: true,
	  format: 'yyyy/mm/dd'
    })
 
	
	//$('#datepicker2a').datepicker({
      //autoclose: true
    //})
	//Date picker ( Usuario )
    //$('#datepicker3').datepicker({
      //autoclose: true
    //})
	
	 //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
  
  
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  
   /*  $(function(){
        //$("#to").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#datepicker1").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#datepicker1").datepicker( "option", "minDate", minValue );
        })
    }); 
	
	 $(function(){
        //$("#to").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#datepicker2").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#datepicker2").datepicker( "option", "minDate", minValue );
        })
    });    */
	
	/* $(document).ready(function(){
    $('#clinica_name').on('change',function(){
        var optionText = $("#clinica_name option:selected").text();
        alert("Selected Option Text: "+optionText);
    });
}); */
  
  
  
</script>
</body>
</html>
