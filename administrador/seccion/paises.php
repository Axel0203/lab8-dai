<?php 
include("../template/cabecera.php"); 
include("../config/crud.php");
?>

<div class="col-md-4">
    <br>
    <h1>Editar relaciones con países</h1>
    <hr>
    <br>
    <form method="POST">

    <div class = "form-group">
    <label for="id" type="hidden"></label>
    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">

    <label for="txtnombre">Nombre</label>
    <input type="text" class="form-control" name="txtnombre" id="txtnombre" value="<?php if(isset($_POST['Seleccionar'])) echo $arrayRow['nombre'] ?>" placeholder="Nombre">

    <label for="txtrelacion">Relacion</label>
    <input type="text" class="form-control" name="txtrelacion" id="txtrelacion" value="<?php if(isset($_POST['Seleccionar'])) echo $arrayRow['relacion'] ?>" placeholder="Relacion">

    <label for="dtfecha">Fecha</label>
    <input type="date" class="form-control" name="dtfecha" id="dtfecha" value="<?php if(isset($_POST['Seleccionar'])) echo $arrayRow['fecha_creacion'] ?>">

    <label for="txtdescripcion">Descripcion</label>
    <input type="text" class="form-control" name="txtdescripcion" id="txtdescripcion" value="<?php if(isset($_POST['Seleccionar'])) echo $arrayRow['descripcion'] ?>" placeholder="Descripcion">

    </div>
    <br><br>
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="Agregar" class="btn btn-success">Agregar</button>
        <button type="submit" name="Modificar" class="btn btn-warning">Modificar</button>
        <button type="submit" name="Cancelar" class="btn btn-info">Cancelar</button>
    </div>
    <br><br>

    </form>

</div>
<div class="col-md-8">
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Relación</th>
                <th>Fecha</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $resultado = $MySQLiconn->query("SELECT * FROM paises");
            while($row = $resultado->fetch_array()) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['relacion']; ?></td>
                <td><?php echo $row['fecha_creacion']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
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