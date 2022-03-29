<?php
require_once("../Modelo/pasajero.php");

if (isset($_REQUEST["btn_enviar"])){
 $modeloPasajero = new Pasajero();
 $nombre=$_POST['nombre'];
 $email=$_POST['email'];
 $telefono=$_POST['telefono'];
 $password=$_POST['password'];
 $modeloPasajero->insertarPasajero($nombre,$email, $telefono, $password);
 
}else {
    header('Location: ../Vista/add.php');
}

?>