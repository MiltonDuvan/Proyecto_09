<?php
require_once("../../conexion/conexion.php");
session_start();
class Pasajero extends Conexion
{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function insertarPasajero($nombre, $email, $telefono, $password)
    {
        $tabla = $this->db->prepare("INSERT INTO pasajero(nombre,email,telefono,password)
        VALUES(:nombre, :email,:telefono, :password)");
        $tabla->bindparam(':nombre', $nombre);
        $tabla->bindparam(':email', $email);
        $tabla->bindparam(':telefono', $telefono);
        $tabla->bindparam(':password', $password);

        if ($tabla->execute()) {
            header('Location: ../Vista/add.php');
        } else {
            header('Location: ../Vista/add.php');
        }
    }
    public function getPasajero()
    {
        $rows = null;
        $tabla = $this->db->prepare("SELECT idPasajero, nombre,email,telefono FROM pasajero");
        $tabla->execute();
        while ($result = $tabla->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function login($email, $password)
    {

        $rows = null;
        $tabla = $this->db->prepare("SELECT idPasajero, email, password FROM pasajero
                WHERE email= :email AND password = :password");

        $tabla->bindparam(':email', $email);
        $tabla->bindparam(':password', $password);
        $tabla->execute();

        //rowCount metodo me encuentra al menos 1 registro

        if ($tabla->rowCount() == 1) {
            //$ingresousuario traer los datos de la tabla
            $ingresoUsuario = $tabla->fetch();
            $_SESSION["email"] = $ingresoUsuario["email"];
            $_SESSION["nombre"] = $ingresoUsuario["nombre"];
            echo "Satisfatorio";
        } else {
            echo "Error al ingresar session";
        }
    }
    public function validarsesionPasajero(){
        if ($_SESSION['email']==NULL){
            header('Location: ../../index.php');
        }
    }

    public function getNombrePasajero(){
        return $_SESSION['email'];
    }

    public function salirPasajero(){
        //session_start();
        unset($_SESSION["email"]);
        session_destroy();
        header('refresh:3 url=../../index.php');
        //header("refresh:3 url=../'");
        echo "terminado...";
    }
} //end

?>