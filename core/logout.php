<?php
session_start();
if(session_destroy()) // Destruye todas las sesiones 
{
header("Location: ../index.php"); // Redirecciona a la pagina de inicio
}
?>