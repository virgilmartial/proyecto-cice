<?php

$usuario = $_POST["usuario"];


$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$sexo = $_POST["sexo"];
$fechaNaci = $_POST["fechaNaci"];
$lugarnaci = $_POST["lugarnaci"];
$localidad = $_POST["localidad"];
$paisresi = $_POST["paisresi"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$usuario = $_POST["usuario"]; 


if (isset($nombre)) {
    header ("Location: index.php?usuario=$nombre"?apellido=$nombre");
}

