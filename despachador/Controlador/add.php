<?php
require_once("../Modelo/despachador.php");

if (isset($_REQUEST["btn_enviar"])){
 $modeloDespachador = new Despachador();
 $nombres= $_POST["nombres"];
 $telefono= $_POST["telefono"];
 $horario= $_POST["horario"];
 $email= $_POST["email"];
 $password= $_POST["password"];
 $modeloDespachador->insertarDespachador($nombres,$telefono,$horario,$email, $password);
 
}else {
    header('Location: ../Vista/index.php');
}

?>