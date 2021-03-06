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
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <!-- Sistema Clinico CSS -->
  <link rel="stylesheet" href="../dist/css/sistemaClinico.css">
  
   

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  
  <script src="dist/js/iconify.min.js"></script>
  
  
  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.html" class="logo" style="position:fixed;">
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
              <span class="hidden-xs">Rafael Sarmiento</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Rafael Sarmiento - Web Developer
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
                  <a href="../index.html" class="btn btn-default btn-flat">Sign out</a>
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
          <p>Rafael sarmiento</p>
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
          <a href="dashboard.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
          <!-- <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul> -->
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li> -->
        <!-- <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li> -->
        <li>
          <a href="clinicas.html">
            <i class="fa fa-plus-square"></i>
            <span>Clinica</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
          <!-- <ul class="treeview-menu">
            <li><a href="racdermaSatelite.html"><i class="fa fa-circle-o"></i>Racderma Satelite</a></li>
            <li><a href="racdermaReforma.html"><i class="fa fa-circle-o"></i>Racderma Reforma</a></li>
            <li><a href="racdermaInsurgentes.html"><i class="fa fa-circle-o"></i>Racderma Insurgentes</a></li>
            <li><a href="dermaartePolanco.html"><i class="fa fa-circle-o"></i>Dermaarte Polanco</a></li>
			<li><a href="dermaarteSatelite.html"><i class="fa fa-circle-o"></i>Dermaarte Satelite</a></li>
            <li><a href="dermaarteCoyoacan.html"><i class="fa fa-circle-o"></i>Dermaarte Coyoacan</a></li>
          </ul> -->
        </li>
		<li class="active">
          <a href="medicos.html">
            <i class="fa fa-user-md"></i>
            <span>Medicos</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
          <!-- <ul class="treeview-menu">
            <li><a href="medicos.html"><i class="fa fa-circle-o"></i>Racderma Satelite</a></li>
            <li><a href="medicos.html"><i class="fa fa-circle-o"></i>Racderma Reforma</a></li>
            <li><a href="medicos.html"><i class="fa fa-circle-o"></i>Racderma Insurgentes</a></li>
            <li><a href="medicos.html"><i class="fa fa-circle-o"></i>Dermaarte Polanco</a></li>
			<li><a href="medicos.html"><i class="fa fa-circle-o"></i>Dermaarte Satelite</a></li>
            <li><a href="medicos.html"><i class="fa fa-circle-o"></i>Dermaarte Coyoacan</a></li>
          </ul> -->
        </li>
		<li>
          <a href="pacientes.html">
            <i class="fa fa-user-plus"></i>
            <span>Pacientes</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
          <!-- <ul class="treeview-menu">
            <li><a href="pacientes.html"><i class="fa fa-circle-o"></i>Racderma Satelite</a></li>
            <li><a href="pacientes.html"><i class="fa fa-circle-o"></i>Racderma Reforma</a></li>
            <li><a href="pacientes.html"><i class="fa fa-circle-o"></i>Racderma Insurgentes</a></li>
            <li><a href="pacientes.html"><i class="fa fa-circle-o"></i>Dermaarte Polanco</a></li>
			<li><a href="pacientes.html"><i class="fa fa-circle-o"></i>Dermaarte Satelite</a></li>
            <li><a href="pacientes.html"><i class="fa fa-circle-o"></i>Dermaarte Coyoacan</a></li>
          </ul> -->
        </li>
		<li>
          <a href="usuarios.html">
            <i class="fa fa fa-users"></i>
            <span>Usuarios</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
          <!-- <ul class="treeview-menu">
            <li><a href="usuarios.html"><i class="fa fa-circle-o"></i>Racderma Satelite</a></li>
            <li><a href="usuarios.html"><i class="fa fa-circle-o"></i>Racderma Reforma</a></li>
            <li><a href="usuarios.html"><i class="fa fa-circle-o"></i>Racderma Insurgentes</a></li>
            <li><a href="usuarios.html"><i class="fa fa-circle-o"></i>Dermaarte Polanco</a></li>
			<li><a href="usuarios.html"><i class="fa fa-circle-o"></i>Dermaarte Satelite</a></li>
            <li><a href="usuarios.html"><i class="fa fa-circle-o"></i>Dermaarte Coyoacan</a></li>
          </ul> -->
        </li>
		<li>
          <a href="registrar.php">
			<i class="fa fa-address-book"></i>
            <span>Registrar</span>
          </a>
          <!--<ul class="treeview-menu">
            <li><a href="pages/registrarMedicos.html"><i class="fa fa-user-md"></i>Registrar Medicos</a></li>
            <li><a href="pages/registrarPacientes.html"><i class="fa fa-user-plus"></i>Registrar Pacientes</a></li>
            <li><a href="pages/registrarUsuarios.html"><i class="fa fa-user-circle-o"></i>Registrar Usuarios</a></li>
          </ul>-->
        </li>
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li> -->
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li> -->
		<li>
          <a href="crearCita.php">
            <i class="fa fa-calendar-plus-o"></i> <span>Crear Cita</span>
			<span class="pull-right-container">
            <small class="label pull-right bg-blue">16</small>
			</span>
          </a>
        </li>
		<li>
          <a href="listadoCitas.html">
            <i class="fa fa-list-ul"></i> <span>Listado de Citas</span>
			<span class="pull-right-container">
            <small class="label pull-right bg-blue">28</small>
			</span>
          </a>
        </li>
        <li>
          <a href="calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li> -->
        <!-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Medicos
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Medicos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	  
	  <div class="box">
            <div class="box-header with-border">
              
			  <i class="fa fa-user-md"></i>
              
			  <h1 class="box-title"><b>Medicos en Sistema Clinico</b></h1>
            
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
             
				<!-- Small boxes (Stat box) -->
<div class="box">



      <div class="box">	
		<div class="row">
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
			
			<div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			  <li>
			      <div class="form-group">
                  <label>Medico Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus">
                       <option class="greenText form-control activoGreen1" value="1" ><h1>Activo</h1></option>
                       <option class="redText form-control inactivoRed1"   value="0" >Inactivo</option>
                  </select>
                </div>
			  </li>
                <li><a href="#">No de citas por Dia<span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">No de citas por Semana<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">No de citas por Mes<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">No de citas por Año<span class="pull-right badge bg-red">842</span></a></li>
				<li>
				<div class="viewProfile">
				<a href="medicosProfile.html" class="btn btn-primary btn-block">
				<i class="fa fa-user-md"></i>
				<b>View Profile</b>
				</a>
				</div>
				</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
		<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
			
			<div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			  <li>
			      <div class="form-group">
                  <label>Medico Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus">
                       <option class="greenText form-control activoGreen2" value="activo" >Activo</option>
                       <option class="redText form-control inactivoRed2"   value="inactivo" >Inactivo</option>
                  </select>
                </div>
			  </li>
                <li><a href="#">No de citas por Dia<span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">No de citas por Semana<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">No de citas por Mes<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">No de citas por Año<span class="pull-right badge bg-red">842</span></a></li>
				<li>
				<div class="viewProfile">
				<a href="medicosProfile.html" class="btn btn-primary btn-block">
				<i class="fa fa-user-md"></i>
				<b>View Profile</b>
				</a>
				</div>
				</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
		
		<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
			
			<div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			  <li>
			      <div class="form-group">
                  <label>Medico Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus">
                       <option class="greenText form-control activoGreen3" value="activo" >Activo</option>
                       <option class="redText form-control inactivoRed3"   value="inactivo" >Inactivo</option>
                  </select>
                </div>
			  </li>
                <li><a href="#">No de citas por Dia<span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">No de citas por Semana<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">No de citas por Mes<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">No de citas por Año<span class="pull-right badge bg-red">842</span></a></li>
				<li>
				<div class="viewProfile">
				<a href="medicosProfile.html" class="btn btn-primary btn-block">
				<i class="fa fa-user-md"></i>
				<b>View Profile</b>
				</a>
				</div>
				</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
		
		<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
			
			<div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			  <li>
			      <div class="form-group">
                  <label>Medico Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus">
                       <option class="greenText form-control activoGreen4" value="activo" >Activo</option>
                       <option class="redText form-control inactivoRed4"   value="inactivo" >Inactivo</option>
                  </select>
                </div>
			  </li>
                <li><a href="#">No de citas por Dia<span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">No de citas por Semana<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">No de citas por Mes<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">No de citas por Año<span class="pull-right badge bg-red">842</span></a></li>
				<li>
				<div class="viewProfile">
				<a href="medicosProfile.html" class="btn btn-primary btn-block">
				<i class="fa fa-user-md"></i>
				<b>View Profile</b>
				</a>
				</div>
				</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
		
		<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
			
			<div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			  <li>
			      <div class="form-group">
                  <label>Medico Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus">
                       <option class="greenText form-control activoGreen5" value="activo" >Activo</option>
                       <option class="redText form-control inactivoRed5"   value="inactivo" >Inactivo</option>
                  </select>
                </div>
			  </li>
                <li><a href="#">No de citas por Dia<span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">No de citas por Semana<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">No de citas por Mes<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">No de citas por Año<span class="pull-right badge bg-red">842</span></a></li>
				<li>
				<div class="viewProfile">
				<a href="medicosProfile.html" class="btn btn-primary btn-block">
				<i class="fa fa-user-md"></i>
				<b>View Profile</b>
				</a>
				</div>
				</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
		
		<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
			
			<div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			  <li>
			      <div class="form-group">
                  <label>Medico Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus">
                       <option class="greenText form-control activoGreen6" value="activo" >Activo</option>
                       <option class="redText form-control inactivoRed6"   value="inactivo" >Inactivo</option>
                  </select>
                </div>
			  </li>
                <li><a href="#">No de citas por Dia<span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">No de citas por Semana<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">No de citas por Mes<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">No de citas por Año<span class="pull-right badge bg-red">842</span></a></li>
				<li>
				<div class="viewProfile">
				<a href="medicosProfile.html" class="btn btn-primary btn-block">
				<i class="fa fa-user-md"></i>
				<b>View Profile</b>
				</a>
				</div>
				</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
		
		<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
			
			<div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			  <li>
			      <div class="form-group">
                  <label>Medico Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus">
                       <option class="greenText form-control activoGreen7" value="activo" >Activo</option>
                       <option class="redText form-control inactivoRed7"   value="inactivo" >Inactivo</option>
                  </select>
                </div>
			  </li>
                <li><a href="#">No de citas por Dia<span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">No de citas por Semana<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">No de citas por Mes<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">No de citas por Año<span class="pull-right badge bg-red">842</span></a></li>
				<li>
				<div class="viewProfile">
				<a href="medicosProfile.html" class="btn btn-primary btn-block">
				<i class="fa fa-user-md"></i>
				<b>View Profile</b>
				</a>
				</div>
				</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
		
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
			
			<div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			  <li>
			      <div class="form-group">
                  <label>Medico Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus">
                       <option class="greenText form-control activoGreen8" value="activo" >Activo</option>
                       <option class="redText form-control inactivoRed8"   value="inactivo" >Inactivo</option>
                  </select>
                </div>
			  </li>
                <li><a href="#">No de citas por Dia<span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">No de citas por Semana<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">No de citas por Mes<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">No de citas por Año<span class="pull-right badge bg-red">842</span></a></li>
				<li>
				<div class="viewProfile">
				<a href="medicosProfile.html" class="btn btn-primary btn-block">
				<i class="fa fa-user-md"></i>
				<b>View Profile</b>
				</a>
				</div>
				</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
		
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
			
			<div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			  <li>
			      <div class="form-group">
                  <label>Medico Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus">
                       <option class="greenText form-control activoGreen9" value="activo" >Activo</option>
                       <option class="redText form-control inactivoRed9"   value="inactivo" >Inactivo</option>
                  </select>
                </div>
			  </li>
                <li><a href="#">No de citas por Dia<span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">No de citas por Semana<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">No de citas por Mes<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">No de citas por Año<span class="pull-right badge bg-red">842</span></a></li>
				<li>
				<div class="viewProfile">
				<a href="medicosProfile.html" class="btn btn-primary btn-block">
				<i class="fa fa-user-md"></i>
				<b>View Profile</b>
				</a>
				</div>
				</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
		
		<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
			
			<div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			  <li>
			      <div class="form-group">
                  <label>Medico Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus">
                       <option class="greenText form-control activoGreen10" value="activo" >Activo</option>
                       <option class="redText form-control inactivoRed10"   value="inactivo" >Inactivo</option>
                  </select>
                </div>
			  </li>
                <li><a href="#">No de citas por Dia<span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">No de citas por Semana<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">No de citas por Mes<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">No de citas por Año<span class="pull-right badge bg-red">842</span></a></li>
				<li>
				<div class="viewProfile">
				<a href="medicosProfile.html" class="btn btn-primary btn-block">
				<i class="fa fa-user-md"></i>
				<b>View Profile</b>
				</a>
				</div>
				</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
		
		<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
			
			<div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			  <li>
			      <div class="form-group">
                  <label>Medico Estatus</label>
                  <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus">
                       <option class="greenText form-control activoGreen11" value="activo" >Activo</option>
                       <option class="redText form-control inactivoRed11"   value="inactivo" >Inactivo</option>
                  </select>
                </div>
			  </li>
                <li><a href="#">No de citas por Dia<span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">No de citas por Semana<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">No de citas por Mes<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">No de citas por Año<span class="pull-right badge bg-red">842</span></a></li>
				<li>
				<div class="viewProfile">
				<a href="medicosProfile.html" class="btn btn-primary btn-block">
				<i class="fa fa-user-md"></i>
				<b>View Profile</b>
				</a>
				</div>
				</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
		
		<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"></h5>
                    <span class="description-text"></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
			
			<div class="box-footer no-padding">
              <ul class="nav nav-stacked">
			  <li>
			      <div class="form-group">
                  <label>Medico Estatus</label>
        <select onchange="this.className=this.options[this.selectedIndex].className" class="greenText form-control medicoEstatus">
                       <option class="greenText form-control activoGreen12" value="activo" >Activo</option>
                       <option class="redText form-control inactivoRed12"   value="inactivo" >Inactivo</option>
                  </select>
                </div>
			  </li>
                <li><a href="#">No de citas por Dia<span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">No de citas por Semana<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">No de citas por Mes<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">No de citas por Año<span class="pull-right badge bg-red">842</span></a></li>
				<li>
				<div class="viewProfile">
				<a href="medicosProfile.html" class="btn btn-primary btn-block">
				<i class="fa fa-user-md"></i>
				<b>View Profile</b>
				</a>
				</div>
				</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
		
      </div>
		
          <!-- Custom tabs (Charts with tabs)-->
          
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          
          <!-- /.box -->

          <!-- quick email widget -->
          

        <!--</section>-->
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
       
        <!-- right col -->
      </div>
      <!-- /.row -->
<!-- /.box-footer -->
</div>
			
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
           
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
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<!-- Medicos Estatus -->
<script>
  $("#color_me1").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me1").attr("class", color);
});
$("#color_me2").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me2").attr("class", color);
});
 $("#color_me3").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me3").attr("class", color);
});
$("#color_me4").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me4").attr("class", color);
});
 $("#color_me5").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me5").attr("class", color);
});
$("#color_me6").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me6").attr("class", color);
});
$("#color_me7").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me7").attr("class", color);
});
$("#color_me8").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me8").attr("class", color);
});
 $("#color_me9").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me9").attr("class", color);
});
$("#color_me10").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me10").attr("class", color);
});
 $("#color_me11").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me11").attr("class", color);
});
$("#color_me12").change(function(){
    var color = $("option:selected", this).attr("class");
    $("#color_me12").attr("class", color);
});
</script>
</body>
</html>
