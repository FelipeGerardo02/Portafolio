<?php
session_start();

if($_POST){

    if( ($_POST["usuario"]=="invitado") && ($_POST["contrasenia"]=="1234") ){
        $_SESSION['usuario']="invitado";
        header("location:index.php");
    }else{
        echo "<script> alert('Usuario o contraseña incorrecta'); </script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
</head>

<body>
<form action="login.php" method="post">
<section class="vh-100" style="background-color: #508bfc;"> 
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <h3 class="mb-5">Ingresar al portafolio</h3>

            <div class="form-outline mb-4">
              <input type="text" id="" class="form-control form-control-lg" name="usuario"/>
              <label class="form-label">Usuario</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="" class="form-control form-control-lg" name="contrasenia" />
              <label class="form-label">Contraseña</label>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Ingresar</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</body>
</html>