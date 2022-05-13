<?php 
include("template/cabecera.php");
include("administrador/config/crudComer.php"); 
?>
<br>
<h1>Registro de flujos</h1>
<hr> 
<br>
<div class="col-md-4">
    
    <form method="POST">

    <div class = "form-group">
    <label for="id" type="hidden"></label>
    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">

    <label for="txtflujo">Tipo de flujo</label>
    <select class="form-control" name="txtflujo" id="txtflujo">
        <option value="">Seleccionar un tipo de flujo</option>
        <option value="Importación">Importación</option>
        <option value="Exportación">Exportación</option>
    </select>

    <label for="txtnompais">Nombre del país</label>
    <select class="form-control" name="txtnompais" id="txtnompais">
        <option value="">Seleccionar un país...</option>
        <?php
        $stmt = $MySQLiconn->prepare("SELECT * FROM paises");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_array())
        {
            echo "<option value='".$row['id']."'>".$row['nombre']."</option>";
        }
        ?>
    </select>

    <label for="dtfecha">Fecha</label>
    <input type="date" class="form-control" name="dtfecha" id="dtfecha" value="<?php if(isset($_POST['Seleccionar'])) echo $arrayRow['fecha'] ?>">

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
                <th>Flujo</th>
                <th>Nombre del país</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $resultado = $MySQLiconn->query("SELECT * FROM registro_comercios");
            while($row = $resultado->fetch_array()) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['tipo_flujo']; ?></td>
                <td><?php echo $row['nombre_pais']; ?></td>
                <td><?php echo $row['fecha']; ?></td>
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

<?php include("template/pie.php"); ?>