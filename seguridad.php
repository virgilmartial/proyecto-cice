<?php

session_start();

if($_SESSION["autentificado"] != "SI"){
	header("location: loginForm.php");
	exit();
	session_destroy();
}