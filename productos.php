<?php 
include("template/cabecera.php"); 
include("administrador/config/crudProd.php");
?>
<br>
<h1>Productos</h1>
<hr> 
<br>
<div class="col-md-4">
    
    <form method="POST">

    <div class = "form-group">
    <label for="id" type="hidden"></label>
    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">

    <label for="txtnombre">Nombre</label>
    <input type="text" class="form-control" name="txtnombre" id="txtnombre" value="<?php if(isset($_POST['Seleccionar'])) echo $arrayRowProd['nombre'] ?>" placeholder="Nombre">

    <label for="txtcantidad">Cantidad</label>
    <input type="number" class="form-control" name="txtcantidad" id="txtcantidad" value="<?php if(isset($_POST['Seleccionar'])) echo $arrayRowProd['cantidad'] ?>" placeholder="Cantidad">

    <label for="txtdescripcion">Descripción</label>
    <input type="text" class="form-control" name="txtdescripcion" id="txtdescripcion" value="<?php if(isset($_POST['Seleccionar'])) echo $arrayRowProd['descripcion'] ?>" placeholder="Descripción">

    </div>
    </br></br>
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="Agregar" class="btn btn-success">Agregar</button>
        <button type="submit" name="Modificar" class="btn btn-warning">Modificar</button>
        <button type="submit" name="Cancelar" class="btn btn-info">Cancelar</button>
    </div>

    </form>

</div>
<div class="col-md-8">
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $resultado = $MySQLiconn->query("SELECT * FROM productos");
            while($row = $resultado->fetch_array()) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['cantidad']; ?></td>
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

<?php include_once("template/pie.php"); ?>