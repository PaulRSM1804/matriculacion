<?php
//include("Config/conn.php");
include("Config/Database.php");
session_start();
//$_SESSION['PERMISO'] = FALSE;
if($_SESSION['PERMISO']==FALSE){
  echo "<script>
            
            window.location.href = 'login.php';
            </script>";
}/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usr = $_POST["usuario"];
    $clave = $_POST["clave"];
    $sql = "select * from usuario where usr='$usr' and pwd='$clave';";
    $res = $conn->query($sql);
    if ($res->num_rows == 1) {
        $row = $res->fetch_assoc();
        $_SESSION['PERMISO'] = TRUE;
        $_SESSION['USR'] = $row['usr'];
        echo "<script>
            alert('Bienvenido');
            window.location.href = 'index2.php';
            </script>";
    } else {
        echo "<script>
            alert('No eres bienvenido');
            </script>";
    }
}*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        window.alert("Usuario creado correctamente")
    </script>
    <script type="text/javascript">
        window.location.href = "user.php";
    </script>
</body>

</html>