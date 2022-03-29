<?php
require_once("../../conexion/conexion.php");

class Pasajero extends Conexion {

    public function __construct()
    {
        $this->db =parent::__construct();
    }

    public function insertarPasajero ($nombre,$email, $telefono, $password){
        $tabla= $this->db->prepare("INSERT INTO pasajero(nombre,email,telefono,password)
        VALUES(:nombre, :email,:telefono, :password)");
        $tabla->bindparam(':nombre', $nombre);
        $tabla->bindparam(':email', $email);
        $tabla->bindparam(':telefono', $telefono);
        $tabla->bindparam(':password', $password);

        if ($tabla->execute()){
            header('Location: ../Vista/add.php');
        }else{
            header('Location: ../Vista/add.php');
        }
       
    }
    public function getPasajero(){
            $rows= null;
            $tabla = $this->db->prepare("SELECT idPasajero, nombre,email,telefono FROM pasajero");
            $tabla->execute();
            while($result = $tabla->fetch()){
                $rows[] = $result;
            }
            return $rows;
    }
}//end
?>