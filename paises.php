<?php 
include("template/cabecera.php"); 
include("administrador/config/crud.php");
?>
<br>
<h1>Relaciones con países</h1>
<hr> 
<br>
<div class="col-md-12">
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Relación</th>
                <th>Fecha</th>
                <th>Descripción</th>
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
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>

<?php include("template/pie.php"); ?>

