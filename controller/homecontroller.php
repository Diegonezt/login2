<?php
    class omecontroller{
        private $MODEL;

        public function__contructor(){
            require_once("C://xapp/htdocs/login2/model/homemodel.php");
            $this ->MODEL = new homemodel();

        }
        public function guardarUsuario($correo, $contraseña){
            $valor = $this ->MODEL -> agregarusuario(
                $this->limpiarcorreo($correo),
                $this->encriptarcontraseña (
                    $this -> limpiarcontraseña($contraseña)
                )
                );
                return $valor;
        }
        public function limpiarcadena($campo){
            $campo = strip_tags($campo);
            $campo = filter_Var($campo, FILTER_UNSAFE_RAW);
            $campo = htmlspecialchars ($campo);
            return $campo;
        }
        public function encriptarcontraseña($contraseña){
            return password_hash($contraseña, PASSWORD_DEFAULT);
        }
        public function verificarusuario($correo,$contraseña){
            $keydb = $this ->MODEL -> obtenerclave($correo);
            return(password_verify($contraseña, $keydb)) ? true : false;
        }

    }

    
?>