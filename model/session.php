
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("localhost","liondigi_agenda","Martin24","liondigi_agendaderma");
// Selecting Database
$db = mysql_select_db("liondigi_agendaderma", $conn);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from login where username='$user_check'", $conn);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($conn); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
