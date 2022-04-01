<?php
require_once("../Modelo/pasajero.php");
$modeloUsuario= new Pasajero();
$cerrarsesionPasajero =$modeloUsuario->salirPasajero();
?>