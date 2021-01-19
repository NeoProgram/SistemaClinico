
<?php







//$errors = array();





// connect to the database
//$db = mysqli_connect('23.229.239.195', 'liondigi_agenda', 'Martin24', 'liondigi_agendaderma');

$db = mysqli_connect("localhost","liondigi_agenda","Martin24","liondigi_agendaderma");

//$db = new PDO("mysql:host=23.229.239.195;dbname=liondigi_agendaderma;port=3306","liondigi_agenda","Martin24");

// REGISTER MEDICOS
if (isset($_POST['reg_medico'])) {
	
	// receive all input values from the form
  $usuario_registra = mysqli_real_escape_string($db, $_POST['usuario_registra']);
  $fecha_reg_medico = mysqli_real_escape_string($db, $_POST['fecha_reg_medico']);
  $clinica_id = mysqli_real_escape_string($db, $_POST['clinica_id']);
  $clinica_name = mysqli_real_escape_string($db, $_POST['clinica_name']);
  $estatus_medico = mysqli_real_escape_string($db, $_POST['estatus_medico']);
  $apellido_paterno = mysqli_real_escape_string($db, $_POST['apellido_paterno']);
  $apellido_materno = mysqli_real_escape_string($db, $_POST['apellido_materno']);
  $primer_nombre = mysqli_real_escape_string($db, $_POST['primer_nombre']);
  $segundo_nombre = mysqli_real_escape_string($db, $_POST['segundo_nombre']);
  $cedula_pro = mysqli_real_escape_string($db, $_POST['cedula_pro']);
  $whatsapp = mysqli_real_escape_string($db, $_POST['whatsapp']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $notas = mysqli_real_escape_string($db, $_POST['notas']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $date_exact_reg = mysqli_real_escape_string($db, $_POST['date_exact_reg']);
  $choose_radio_days = mysqli_real_escape_string($db, $_POST['choose_radio_days']);
  //$numero_dias = mysqli_real_escape_string($db, $_POST['numero_dias']);
  $ip_address = mysqli_real_escape_string($db, $_POST['ip_address']);
  $user_device = mysqli_real_escape_string($db, $_POST['user_device']);
  
  $my_checkbox = implode(',', $_POST['my_checkbox']);
  
  
  //$total_days = mysqli_real_escape_string($db, $_POST['total_days']);
  
  
 //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ 
  
      // Mandatory to set the default timezone to work with DateTime functions
         /* date_default_timezone_set('America/Mexico');
 
         $start_date = new DateTime('2019-12-16');
         $end_date = new DateTime('2020-01-27');
 
         $period = new DatePeriod(
	     $start_date, // 1st PARAM: start date
	     new DateInterval('P3D'), // 2nd PARAM: interval (1 day interval in this case)
	     $end_date, // 3rd PARAM: end date
	     DatePeriod::EXCLUDE_START_DATE // 4th PARAM (optional): self-explanatory
       );
 
 
         foreach($period as $date) {
	     echo $date->format('Y-m-d').'<br/>'; // Display the dates in yyyy-mm-dd format
       } */
  
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ 
          
		  // INTERVAL
		  
		  /* $today = date("Y-m-d");
          $datestop=$_POST['datestop'];
          //echo "$today<br /><br />$datestop<br /><br />";
          $begin = new DateTime($today);
          $end = new DateTime($datestop);

          $interval = DateInterval::createFromDateString($interval);
          $period = new DatePeriod($begin, $interval, $end);

          foreach ($period as $dt) {

          $dateloop = $dt->format("Y-m-d"); */
          // do other tasks
		  
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ 		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
          $numero_dias = mysqli_real_escape_string($db, $_POST['numero_dias']);
          
          
		   

           function returnDates($fromdate, $todate) {
			
		  $total_days = DateTime::createFromFormat('Y/m/d', strtotime($total_days));
		  
		  
		  
			 
          $fromdate = \DateTime::createFromFormat('Y/m/d', $fromdate);
          $todate = \DateTime::createFromFormat('Y/m/d', $todate);
          return new \DatePeriod(
          $fromdate,
          new \DateInterval('P3D'),
          $todate->modify('+1 day')
        );
      }
	   
		  //$numero_dias = mysqli_real_escape_string($db, $_POST['numero_dias']);
		  
	      $start_date = mysqli_real_escape_string($db, $_POST['start_date']);
          $end_date = mysqli_real_escape_string($db, $_POST['end_date']);
		  
		  $total_days = mysqli_real_escape_string($db, $_POST['total_days']);
		  
          $datePeriod = returnDates($start_date, $end_date);
          foreach($datePeriod as $total_days) {
          //echo $total_days->format('Y/m/d'), PHP_EOL;
		  
    } 
  

  
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ 
  
  
  
  
  
  
  
	   
         /*  for($i=1; $i<=52; $i++){
		   
		$total_days = date("M d Y", strtotime('+'.$i.' Monday'));  
		
        echo "$total_days\n";
		
      }      */
	  
	  
	  
	 /*  for($i=1; $i<=52; $i++) {
    $date_date = date("M d Y", strtotime('+'.$i.' Monday'));
    $sql = "INSERT INTO sc_medicos (date_date) VALUES ('$date_date')";
     if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
} */
	  
	  
	  
	  
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	  
	  
	  
	  
 	  /* $sql  = "INSERT INTO sc_medicos_dias (date_date) VALUES ";
	  
      $values = array();
      for($i=1; $i<=52; $i++) {
      $date_date = date("M d Y", strtotime('+'.$i.' Monday'));
      $values[] = "('$date_date')";

      }
      $sql  .= implode(',', $values);
      if ($db->query($sql ) === TRUE) {
      echo "New record created successfully";
      } else {
      echo "Error: " . $sql  . "<br>" . $db->error;
      }     
	  
	 // Date
    $date = date('Y-m-d H:i:s');
	
	// IP Address
    $ip_address = $_SERVER['REMOTE_ADDR'];
	
	// User Device
	//$user_device = $_SERVER['HTTP_USER_AGENT'];
	$user_device = "";
    $deviceAgent = array("Macintosh","Windows","Windows NT","Mozilla","iPhone","iPod","Android","Blackberry",
    "Opera Mini", "Windows ce", "Nokia", "sony" );
    for($i=0; $i<sizeof($deviceAgent); $i++){
    if(stripos( $_SERVER['HTTP_USER_AGENT'], $deviceAgent[$i] )){
        $user_device = $deviceAgent[$i];
        break;
    }
}
	
    // Query to insert data to Database
  	$query = "INSERT INTO sc_medicos_dias (usuario_registra,
                                        fecha_reg_medico,	
	                                    clinica_id,									
										estatus_medico, 
										username,
										date_exact_reg,
										choose_radio_days,
										numero_dias,
										my_checkbox,
										start_date,
										end_date,
										date_date
										) 
  			                    VALUES ('$usuario_registra', 
								        '$date', 
								        '$clinica_id', 
										'$estatus_medico',
										'$username',	
										'$date',
										'$choose_radio_days',
										'$numero_dias',
										'" . $my_checkbox . "',
										'$start_date',
										'$end_date',
										
										'$date_date'
										
											
										)"; //echo $query;
										
										
	  		
								
										
										
										
										
   mysqli_query($db, $query); */
   
  	//$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now registered a new Patient";
  	//header('location: dashboard.php');
  //}

	  
	  
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	  
	  
	  
	  
	  
	  
	 
	  
	  
	  
	  
	  
	  
    
	
	
	$start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
	
	
	

    // Date
    $date = date('Y-m-d H:i:s');
	
	// IP Address
    $ip_address = $_SERVER['REMOTE_ADDR'];
	
	// User Device
	//$user_device = $_SERVER['HTTP_USER_AGENT'];
	$user_device = "";
    $deviceAgent = array("Macintosh","Windows","Windows NT","Mozilla","iPhone","iPod","Android","Blackberry",
    "Opera Mini", "Windows ce", "Nokia", "sony" );
    for($i=0; $i<sizeof($deviceAgent); $i++){
    if(stripos( $_SERVER['HTTP_USER_AGENT'], $deviceAgent[$i] )){
        $user_device = $deviceAgent[$i];
        break;
    }
}
	
    // Query to insert data to Database
  	$query = "INSERT INTO sc_medicos (usuario_registra,
                                        fecha_reg_medico,	
	                                    clinica_id,
                                        clinica_name,										
										estatus_medico, 
										apellido_paterno, 
	                                    apellido_materno, 
										primer_nombre, 
										segundo_nombre, 	
										cedula_pro,	
										whatsapp,
										email,
										notas,
										username,
										date_exact_reg,
										choose_radio_days,
										numero_dias,
										ip_address,
										user_device,
										my_checkbox,
										start_date,
										end_date,
										total_days
										) 
  			                    VALUES ('$usuario_registra', 
								        '$date', 
								        '$clinica_id', 
										'$clinica_name',
										'$estatus_medico',
										'$apellido_paterno', 
								        '$apellido_materno', 
										'$primer_nombre',
										'$segundo_nombre',       
										'$cedula_pro',       
										'$whatsapp', 
								        '$email', 
										'$notas',
										'$username',	
										'$date',
										'$choose_radio_days',
										'$numero_dias',
										'$ip_address',
										'$user_device',
										'" . $my_checkbox . "',
										'$start_date',
										'$end_date',
										
										'$strtotime(total_days)'
										
											
										)"; //echo $query;
										
										
	  		
								
										
										
										
										
   mysqli_query($db, $query);
   
  	//$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now registered a new Patient";
  	//header('location: dashboard.php');
  //}
}


// REGISTER PACIENTE
if (isset($_POST['reg_paciente'])) {
	
	// receive all input values from the form
  $usuario_registra = mysqli_real_escape_string($db, $_POST['usuario_registra']);
  $fecha_reg_paciente = mysqli_real_escape_string($db, $_POST['fecha_reg_paciente']);
  $date_exact_reg = mysqli_real_escape_string($db, $_POST['date_exact_reg']);
  $ip_address = mysqli_real_escape_string($db, $_POST['ip_address']);
  $clinica_id = mysqli_real_escape_string($db, $_POST['clinica_id']);
  $medio_registro = mysqli_real_escape_string($db, $_POST['medio_registro']);
  $apellido_paterno = mysqli_real_escape_string($db, $_POST['apellido_paterno']);
  $apellido_materno = mysqli_real_escape_string($db, $_POST['apellido_materno']);
  $primer_nombre = mysqli_real_escape_string($db, $_POST['primer_nombre']);
  $segundo_nombre = mysqli_real_escape_string($db, $_POST['segundo_nombre']);
  $telefono = mysqli_real_escape_string($db, $_POST['telefono']);
  $celular = mysqli_real_escape_string($db, $_POST['celular']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $notas = mysqli_real_escape_string($db, $_POST['notas']);
  $user_device = mysqli_real_escape_string($db, $_POST['user_device']);

  // Finally, register user if there are no errors in the form
  //if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database
	
    // Date
    $date = date('Y-m-d H:i:s');
	
	// IP Address
    $ip_address = $_SERVER['REMOTE_ADDR'];
	
	// User Device
	//$user_device = $_SERVER['HTTP_USER_AGENT'];
	$user_device = "";
    $deviceAgent = array("Macintosh","Windows","Windows NT","Mozilla","iPhone","iPod","Android","Blackberry",
    "Opera Mini", "Windows ce", "Nokia", "sony" );
    for($i=0; $i<sizeof($deviceAgent); $i++){
    if(stripos( $_SERVER['HTTP_USER_AGENT'], $deviceAgent[$i] )){
        $user_device = $deviceAgent[$i];
        break;
    }
}
	
  	$query = "INSERT INTO sc_pacientes (usuario_registra,
                                        fecha_reg_paciente,	
										date_exact_reg,
										ip_address,
										user_device,
	                                    clinica_id, 
										medio_registro, 
										apellido_paterno, 
	                                    apellido_materno, 
										primer_nombre, 
										segundo_nombre, 
										telefono,
										celular,
										email,
										notas) 
  			                    VALUES ('$usuario_registra', 
								        '$date',
                                        '$date',
										'$ip_address',
										'$user_device',
								        '$clinica_id', 
										'$medio_registro',
										'$apellido_paterno', 
								        '$apellido_materno', 
										'$primer_nombre',
										'$segundo_nombre', 
								        '$telefono', 
										'$celular', 
								        '$email', 
										'$notas')"; echo $query;
   mysqli_query($db, $query);
  	//$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now registered a new Patient";
     //header('location: ../pacientes.html');
  //}
}

// REGISTER USUARIO
if (isset($_POST['reg_usuario'])) {
	
	// receive all input values from the form
	
  $estatus_usuario = mysqli_real_escape_string($db, $_POST['estatus_usuario']);
  $apellido_paterno = mysqli_real_escape_string($db, $_POST['apellido_paterno']);
  $apellido_materno = mysqli_real_escape_string($db, $_POST['apellido_materno']);
  $primer_nombre = mysqli_real_escape_string($db, $_POST['primer_nombre']);
  $segundo_nombre = mysqli_real_escape_string($db, $_POST['segundo_nombre']);
  $whatsapp = mysqli_real_escape_string($db, $_POST['whatsapp']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  //$username = mysqli_real_escape_string($db, $_POST['username']);
  //$password = mysqli_real_escape_string($db, $_POST['password']);
  
  
           $username = mysqli_real_escape_string($db, $_POST['username']);  
           $password = mysqli_real_escape_string($db, $_POST['password']); 
           $password = md5($password); 
  
	  
  
  $usuario_registra = mysqli_real_escape_string($db, $_POST['usuario_registra']);
  $fecha_reg_usuario = mysqli_real_escape_string($db, $_POST['fecha_reg_usuario']);
  $role = mysqli_real_escape_string($db, $_POST['role']);
  $date_exact_reg = mysqli_real_escape_string($db, $_POST['date_exact_reg']);
  $ip_address = mysqli_real_escape_string($db, $_POST['ip_address']);
  $user_device = mysqli_real_escape_string($db, $_POST['user_device']);
  

    // Date
    $date = date('Y-m-d H:i:s');
	
	// IP Address
    $ip_address = $_SERVER['REMOTE_ADDR'];
	
	// User Device
	//$user_device = $_SERVER['HTTP_USER_AGENT'];
	$user_device = "";
    $deviceAgent = array("Macintosh","Windows","Windows NT","Mozilla","iPhone","iPod","Android","Blackberry",
    "Opera Mini", "Windows ce", "Nokia", "sony" );
    for($i=0; $i<sizeof($deviceAgent); $i++){
    if(stripos( $_SERVER['HTTP_USER_AGENT'], $deviceAgent[$i] )){
        $user_device = $deviceAgent[$i];
        break;
    }
}

  	$query = "INSERT INTO sc_usuarios (estatus_usuario,
                                        apellido_paterno,	
	                                    apellido_materno, 
										primer_nombre, 
										segundo_nombre,  	
										whatsapp,
										email,
										username,
										password,
										usuario_registra,
										fecha_reg_usuario,
										role,
										date_exact_reg,
										ip_address,
										user_device) 
  			                    VALUES ('$estatus_usuario', 
								        '$apellido_paterno', 
								        '$apellido_materno', 
										'$primer_nombre',
										'$segundo_nombre', 
										'$whatsapp', 
								        '$email',
                                        '$username',
                                        '$password',
										'$usuario_registra',
										'$date',
										'$role',
										'$date',
										'$ip_address',
										'$user_device'
										)"; echo $query;
   mysqli_query($db, $query);
   
        
}

// CREAR UNA CITA
if (isset($_POST['crear_cita'])) {
	
	// receive all input values from the form
  $estatus_cita = mysqli_real_escape_string($db, $_POST['estatus_cita']);
  
  $fecha_hora_cita = mysqli_real_escape_string($db, $_POST['fecha_hora_cita']);
  
  $cita_comienza = mysqli_real_escape_string($db, $_POST['cita_comienza']);
  $cita_termina = mysqli_real_escape_string($db, $_POST['cita_termina']);
  $fecha_reg_cita = mysqli_real_escape_string($db, $_POST['fecha_reg_cita']);
  $date_exact_reg = mysqli_real_escape_string($db, $_POST['date_exact_reg']);
  $usuario_registra = mysqli_real_escape_string($db, $_POST['usuario_registra']);
  $paciente_id = mysqli_real_escape_string($db, $_POST['paciente_id']);
  $clinica_id = mysqli_real_escape_string($db, $_POST['clinica_id']);
  $medico_id = mysqli_real_escape_string($db, $_POST['medico_id']);
  $procedimiento_id = mysqli_real_escape_string($db, $_POST['procedimiento_id']);
  $consulta_id = mysqli_real_escape_string($db, $_POST['consulta_id']);
  $expediente_id = mysqli_real_escape_string($db, $_POST['expediente_id']);
  $medio_registro = mysqli_real_escape_string($db, $_POST['medio_registro']);
  $apellido_paterno = mysqli_real_escape_string($db, $_POST['apellido_paterno']);
  $apellido_materno = mysqli_real_escape_string($db, $_POST['apellido_materno']);
  $primer_nombre = mysqli_real_escape_string($db, $_POST['primer_nombre']);
  $segundo_nombre = mysqli_real_escape_string($db, $_POST['segundo_nombre']);
  $telefono = mysqli_real_escape_string($db, $_POST['telefono']);
  $celular = mysqli_real_escape_string($db, $_POST['celular']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $notas = mysqli_real_escape_string($db, $_POST['notas']);
  $ip_address = mysqli_real_escape_string($db, $_POST['ip_address']);
  $user_device = mysqli_real_escape_string($db, $_POST['user_device']);

  // Date
    $date = date('Y-m-d H:i:s');
	
	// IP Address
    $ip_address = $_SERVER['REMOTE_ADDR'];
	
	// User Device
	//$user_device = $_SERVER['HTTP_USER_AGENT'];
	$user_device = "";
    $deviceAgent = array("Macintosh","Windows","Windows NT","Mozilla","iPhone","iPod","Android","Blackberry",
    "Opera Mini", "Windows ce", "Nokia", "sony" );
    for($i=0; $i<sizeof($deviceAgent); $i++){
    if(stripos( $_SERVER['HTTP_USER_AGENT'], $deviceAgent[$i] )){
        $user_device = $deviceAgent[$i];
        break;
    }
}

  	    $query = "INSERT INTO sc_citas (estatus_cita,
		
		                                fecha_hora_cita,
		
	                                    cita_comienza,
										cita_termina,
                                        fecha_reg_cita,
                                        date_exact_reg,
										usuario_registra,
                                        paciente_id,										
	                                    clinica_id, 
										medico_id,
										procedimiento_id,
										consulta_id,
										expediente_id,
										medio_registro,
										apellido_paterno, 
	                                    apellido_materno, 
										primer_nombre, 
										segundo_nombre, 					
										telefono,
										celular,
										email,
										notas,
										ip_address,
										user_device) 
  			                    VALUES ('$estatus_cita', 
								
								        '$fecha_hora_cita',
								
								        '$cita_comienza',
										'$cita_termina',
										'$date',
										'$date',
										'$usuario_registra',
								        '$paciente_id', 
										'$clinica_id', 
										'$medico_id',	
										'$procedimiento_id', 
										'$consulta_id', 
										'$expediente_id', 
										'$medio_registro',
										'$apellido_paterno', 
								        '$apellido_materno', 
										'$primer_nombre',
										'$segundo_nombre', 	
								        '$telefono', 
										'$celular', 
								        '$email',
                                        '$notas',
										'$ip_address',
										'$user_device')"; echo $query;
   mysqli_query($db, $query);
  	
}

?>