<?php
require_once("../../conexion/conexion.php");

class Despachador extends Conexion {

    public function __construct()
    {
        $this->db =parent::__construct();
    }

    public function insertarDespachador($nombres, $telefono,$horario,$email, $password){
        $tabla= $this->db->prepare("INSERT INTO despachador(nombres, telefono, horario, email, password)
        VALUES(:nombres,:telefono,:horario,:email,:password)");
        $tabla->bindparam(':nombres', $nombres);
        $tabla->bindparam(':telefono', $telefono);
        $tabla->bindparam(':horario', $horario);
        $tabla->bindparam(':email', $email);
        $tabla->bindparam(':password', $password);

        if ($tabla->execute()){
            header('Location: ../Vista/add.php');
        }else{
            header('Location: ../Vista/add.php');
        }
    }

}//end
?>