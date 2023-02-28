<?php
//include("Config/Database.php");
require_once("model/Usuario.php");
    $usr = $_POST["usuario"];
    $clave = md5($_POST["clave"]);
   
    $clave=hash('sha256',$usr);
    $usuario =new Usuario();
    $usuario->setNombre($usr);
    $usuario->setClave($clave);
    $usuario->guardar();
    echo "<script>
            alert('Usuario Creado exitosamente');
            </script>";

    header("Location: index.php");
    
    //$sql = "insert into usuario values ('$usr','$clave');";
    //$sql = "select * from usuario where idUsuario='$usr' and contrasenaUsuario='$clave';";
    //mysql real scape string
    //$res = $conn->query($sql);
    //$stmt = $conn->ms->prepare($sql);
            //$stmt->bind_param("i", $this->id);
    //$stmt->execute();
?>