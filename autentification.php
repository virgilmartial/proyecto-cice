<?php

$usuario = $_POST["usuario"];

if ($_POST["usuario"]=="user" && $_POST["contrasena"]=="user"){ 
	session_start();
	$_SESSION["autentificado"]= "SI";
	header ("Location: espacioPersonal.php?usuario=$usuario");
}else if ($_POST["usuario"]=="admin" && $_POST["contrasena"]=="admin"){ 
	session_start();
	$_SESSION["autentificado"]= "SI";
	header ("Location: espacioPersonal.php?usuario=$usuario");


}else { 
   	//si no existe le mando otra vez a la portada 
   	header("Location: loginForm.php?errorusuario=si"); 
}