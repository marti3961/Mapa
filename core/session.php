<?php
// Establece coneccion con el servidor pasando nombre del servido, usuario y password como parametro 
$connection = mysql_connect("localhost", "root", "");
// Se declara a que base de datos se conectara
$db = mysql_select_db("mapa_app", $connection);
session_start(); //inicia la sesion
// Se almacena la sesion
$user_check=$_SESSION['login_user'];
// Se obtiene toda la informacion de los usuarios 
$ses_sql=mysql_query("select username, password from login where username='$user_check'", $connection);
// El valor se guarda en una columna con las filas necesarias 
$row = mysql_fetch_assoc($ses_sql);

$login_session =$row['username'];
$login_pass =$row['password'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>