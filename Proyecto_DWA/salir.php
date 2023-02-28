<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
            $_SESSION["NOMBRE"]='';
            $_SESSION['PERMISO'] = FALSE;
            echo "<script>
                window.location.href = 'login.php';
                </script>";
    }
    else{
        echo "<script>
                window.location.href = 'login.php';
                </script>";

    }
?>