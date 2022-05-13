<?php 
include("../template/cabecera.php"); 
include("../config/crudUsuario.php");
?>

<div class="col-md-4">
    <br>
    <h1>Administrar usuarios</h1>
    <hr>
    <br>
    <form method="POST">

    <div class = "form-group">
    <label for="id" type="hidden"></label>
    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">

    <label for="txtnombres">Nombres</label>
    <input type="text" class="form-control" name="txtnombres" id="txtnombres" value="<?php if(isset($_POST['Seleccionar'])) echo $arrayRowUser['nombres'] ?>" placeholder="Nombres">

    <label for="txtapellidos">Apellidos</label>
    <input type="text" class="form-control" name="txtapellidos" id="txtapellidos" value="<?php if(isset($_POST['Seleccionar'])) echo $arrayRowUser['apellidos'] ?>" placeholder="Apellidos">

    <label for="txtuser">Usuario</label>
    <input type="text" class="form-control" name="txtuser" id="txtuser" value="<?php if(isset($_POST['Seleccionar'])) echo $arrayRowUser['user'] ?>" placeholder="Usuario">

    <label for="txtpsw">Contraseña</label>
    <input type="text" class="form-control" name="txtpsw" id="txtpsw" value="<?php if(isset($_POST['Seleccionar'])) echo $arrayRowUser['password'] ?>" placeholder="Contraseña">

    </div>
    <br><br>
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="Agregar" value="Agregar" class="btn btn-success">Agregar</button>
        <button type="submit" name="Modificar" value="Modificar" class="btn btn-warning">Modificar</button>
        <button type="submit" name="Cancelar" value="Cancelar" class="btn btn-info">Cancelar</button>
    </div>

    </form>

</div>
<br><br>
<div class="col-md-8">
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $resultado = $MySQLiconn->query("SELECT * FROM usuarios");
            while($row = $resultado->fetch_array()) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombres']; ?></td>
                <td><?php echo $row['apellidos']; ?></td>
                <td><?php echo $row['user']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="Seleccionar" value="Seleccionar" class="btn btn-primary">Seleccionar</button>
                        <button type="submit" name="Borrar" value="Borrar" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>

<?php include("../template/pie.php"); ?>