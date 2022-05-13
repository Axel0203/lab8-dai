<?php
include("administrador/config/bd.php");
session_start();
if($_POST){
    if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
        $_SESSION['username'] = 'ok';
        $_SESSION['usuarionombre'] = 'admin';
        $nombredeusuario = $_POST['username'];
        header('Location: /lab8/administrador/inicio.php');
    }else{
        $resultado = $MySQLiconn->query("SELECT * FROM usuarios WHERE user = '".$_POST['username']."' AND password = '".$_POST['password']."'");
        if($resultado -> num_rows == 1){
            $_SESSION['username'] = 'ok';
            $_SESSION['usuarionombre'] = $_POST['username'];
            $nombredeusuario = $_POST['username'];
            header('Location: /lab8/bienvenido.php');
        }else{
            $mensaje="Usuario o contraseña incorrectos";
        }
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
    <link rel="stylesheet" href="css/bootstrap_login.css">
  </head>
  <body>
  <div class="container">
      <div class="row">

      <div class="col-md-4">
          
      </div>

          <div class="col-md-4">
<br/><br/><br/>
          <div class="card">
              <div class="card-header">
                  Login
              </div>
              <div class="card-body">
                <?php
                if(isset($mensaje)){?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $mensaje; ?>
                </div>
                <?php } ?>

                  <form method="POST">

                  <div class = "form-group">

                  <label >Usuario</label>
                  <input type="text" class="form-control" name="username"  placeholder="Escribe tu Usuario">

                  </div>

                  <div class="form-group">

                  <label >Contraseña:</label>
                  <input type="password" class="form-control" name="password" placeholder="Escribe tu Contraseña">

                  </div>

                  <button type="submit" class="btn btn-primary">Ingresar</button>

                  </form>
                  
                  
              </div>

          </div>

          </div>
          
      </div>
  </div>
  </body>
</html>