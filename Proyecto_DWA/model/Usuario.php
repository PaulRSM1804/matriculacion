<?php
    include('config/DataBase.php');
    class Usuario  
    {
        private $nombre;
        private $clave;
        
        public function guardar()
        {
            $conn=new DataBase();
            //print_r($_POST);
            //$usr = $_POST["usuario"];
            //$clave = md5($_POST["clave"]);
            //$clave=hash('sha256',$usr);
            $sql = "insert into usuario values ('$this->nombre','$this->clave','user');";
            //$sql = "select * from usuario where idUsuario='$usr' and contrasenaUsuario='$clave';";
            //mysql real scape string
            //$res = $conn->query($sql);
            $stmt = $conn->ms->prepare($sql);
                    //$stmt->bind_param("i", $this->id);
            $stmt->execute();
        }
        

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of clave
         */ 
        public function getClave()
        {
                return $this->clave;
        }

        /**
         * Set the value of clave
         *
         * @return  self
         */ 
        public function setClave($clave)
        {
                $this->clave = $clave;

                return $this;
        }
    }
    
?>