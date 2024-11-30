<?php
    class homemodel{
        public function __contruct(){
            require_once ("C://xampp/htdocs/login2/config/db.php");
        }
        $pdo = new db();
        $this -> $PDO = $pdo ->conexion();

        public function agregarNuevoUsuario($correo, $password){
            $stament =$this -> PDO ->prepare("INSERT INTO USIARIOS VALUES(:correo, :password)");
            $stament ->bindParam (":correo, $correo");
            $stament ->bindParam (":password, $password");


            try {
                $stament ->execute();
                return true;
            } catch (PDoException $e) {
                return false;
            }
        }

        public function obtenerClave($correo){
            $stament = $this ->PDO->prepare("SELECT PASSWORD FROM USUARIOS WHERE CORREO = :correo");

            $stament ->bindParam(":correo", $correo);

            return ($stament ->execute()) ? $stament ->fetch()["password"] : false;
        } 

    }
?>