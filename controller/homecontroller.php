<?php
    class omecontroller{
        private $MODEL;

        public function__contructor(){
            require_once("C://xapp/htdocs/login2/model/homemodel.php");
            $this ->MODEL = new homemodel();

        }
    }

    public function guardarUsuario($correo, $contraseña){
        $valor = $this ->MODEL -> agregarusuario(
            $this->limpiarcorreo($correo),
            $this->encriptarcontraseña (
                $this -> limpiarcontraseña($contraseña)
            )
        )
    }
?>