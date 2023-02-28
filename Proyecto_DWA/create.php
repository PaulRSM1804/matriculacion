<?php
/*session_start();
  if($_SESSION['PERMISO']==FALSE){
  echo "<script>
      window.location.href = 'login.php';
      </script>";
  }*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">

          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registro</h3>

            <form class="px-md-2" action="crear.php" method="post">

              <div class="form-outline mb-4">
                <input type="text" id="usuario" name="usuario" class="form-control" />
                <label class="form-label" for="form3Example1q">Usuario</label>
              </div>

              <div class="row">


              </div>


              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">

                  <div class="form-outline">
                    <input type="password" id="clave" name="clave" class="form-control" />
                    <label class="form-label" for="form3Example1w">Contraseña</label>
                  </div>

                </div>
              </div>

              <button type="submit" class="btn btn-success mb-2" href="user.php">Crear</button>
              <a type="submit" class="btn btn-warning mb-2" href="login.php">Salir</a>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>