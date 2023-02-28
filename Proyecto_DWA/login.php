<?php
//include("Config/conn.php");
include("Config/Database.php");
session_start();
//$_SESSION['PERMISO'] = FALSE;
$conn = new DataBase();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usr = $_POST["usuario"];
    //$clave = $_POST["palabra_secreta"];
    $clave = md5($_POST["palabraSecreta"]);

    $clave = hash('sha256', $usr);
    $sql = "select * from usuario where idUsuario='$usr' and contrasenaUsuario='$clave';";
    //mysql real scape string
    //$res = $conn->query($sql);
    $stmt = $conn->ms->prepare($sql);
    //$stmt->bind_param("i", $this->id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        //$_SESSION['PERMISO'] = TRUE;
        session_start();
        $_SESSION['PERMISO'] = TRUE;
        //session_start();
        $_SESSION["NOMBRE"] = $_POST["usuario"];
        echo "<script>
            window.location.href = 'index.php';
            </script>";

        $_SESSION["usr"] = $usuario;
        $_SESSION["tipo"] = $row['tipoUsuario'];

        if ($_SESSION["tipo"] == 'admin') {
            header("Location: AprobacionMatricula.php");
        } else {
            header("Location: user.php");
        }
    } else {
        echo "<script>
            alert('USUARIO O CLAVE NO REGISTRADA');
            </script>";
    }
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <meta name="description" content="Formulario de login con Bootstrap">
    <meta name="author" content="Parzibyte">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>

    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="my-5 display-3 fw-bold ls-tight">
                        Registro Vehicular <br />
                        <span class="text-primary">La mejor manera de registrar tu vehículo</span>
                    </h1>

                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">
                            <form action="login.php" method="post">
                                <div class="form-outline mb-4">
                                    <input name="usuario" type="text" id="correo" class="form-control" />
                                    <label class="form-label" for="correo">Usuario</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input name="palabraSecreta" type="password" id="palabraSecreta" class="form-control" />
                                    <label class="form-label" for="palabraSecreta">Contraseña</label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Ingresa
                                </button>

                                <div class="text-center">
                                    <p>No tienes cuenta? Regístrate ahora</p>
                                    <br>
                                    <a type="submit" class="btn btn-danger mb-2" href="create.php">Crear Usuario</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>