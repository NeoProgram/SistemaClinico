<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$conn = mysqli_connect("localhost","liondigi_agenda","Martin24","liondigi_agendaderma");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
  //if (mysqli_ping($conn))
  //{
  //echo "Connection OK!!! ";
  //}
  //else{
      //echo "Error: " . mysqli_error($conn);
  //}
  
  //mysqli_close($conn);
  
?>