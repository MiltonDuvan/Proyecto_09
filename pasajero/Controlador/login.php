<?php
require_once("../Modelo/pasajero.php");
if (isset($_REQUEST["btn_enviar"])){
    $email = $_POST["email"];
    $password =$_POST["password"];
    $modeloPasajero = new Pasajero();
    $modeloPasajero->login($email,$password);

    //el codigo corre hasta la linea die();
    /* echo $loginPasajero;
    die(); */

    if (isset($modeloPasajero)){
        header('Location: ../Vista/perfil.php');
    } else{
        header('Location: ../../Index.php');
    }
}