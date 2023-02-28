<?php
//include("Config/conn.php");
include("Config/Database.php");
session_start();
//$_SESSION['PERMISO'] = FALSE;
if($_SESSION['PERMISO']==FALSE){
  echo "<script>
            
            window.location.href = 'index.php';
            </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <title>Productos</title>
</head>

<body onload="BuscarTodos();">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">SISTEMA VEHICULAR - Administrador</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="AprobacionMatricula.php">Aprobar Matricula</a>
                    </div>
                </div>
            </div>


            <form class="row g-3" action="salir.php" method="post" id="formulario">
                <button type="submit" class="btn btn-danger">SALIR</button>
            </form>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <form onsubmit="return false;" class="row g-3">
                <div class="col-md-6">
                    <input type="hidden" id="idp">
                    <label for="inputplaca" class="form-label">Placa</label>
                    <input type="text" class="form-control" id="placa" readonly>
                </div>
                <div class="col-md-6">
                    <label for="inputmarcaMotor" class="form-label">Marca del motor</label>
                    <input type="text" class="form-control" id="marcaMotor" readonly>
                </div>
                <div class="col-md-6">
                    <label for="inputchasis" class="form-label">Chasis</label>
                    <input type="text" class="form-control" id="chasis" readonly>
                </div>
                <div class="col-md-6">
                    <label for="inputcombustible" class="form-label">Combustible</label>
                    <select id="combustible"  class="form-select" disabled>
                        <option selected>Seleccione...</option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputaño" class="form-label">Año</label>
                    <input type="number" class="form-control" id="año" readonly>
                </div>
                <div class="col-md-6">
                    <label for="inputestado" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estado">
                </div>

                <div class="col-6">
                    <button type="submit" class="btn btn-primary" onclick="Guardar();">Guardar</button>
                </div>

            </form>

            <div class="alert alert-success" role="alert" id="res">
                ...
            </div>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PLACA</th>
                        <th>MARCA MOTOR</th>
                        <th>CHASIS</th>
                        <th>COMBUSTIBLE</th>
                        <th>AÑO</th>
                        <th>ESTADO</th>
                    </tr>
                </thead>
                <tbody id="datos">
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>