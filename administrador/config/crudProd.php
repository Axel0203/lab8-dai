<?php
include_once("bd.php");

/* -----------PRODUCTOS----------- */
/*insertar producto por prepared statement*/
if(isset($_POST['Agregar']))
{
    $stmt = $MySQLiconn->prepare("INSERT INTO productos(nombre, cantidad, descripcion) VALUES(?,?,?)");
    $stmt->bind_param("sis", $_POST['txtnombre'],$_POST['txtcantidad'],$_POST['txtdescripcion']);
    $stmt->execute();
}

/*eliminar producto por prepared statement*/
if(isset($_POST['Borrar']))
{
    $stmt = $MySQLiconn->prepare("DELETE FROM productos WHERE id=?");
    $stmt->bind_param("i", $_POST['id']);
    $stmt->execute();
}

/*Seleccionar producto y mostrar el nombre en el formulario por prepared statement*/
if(isset($_POST['Seleccionar']))
{
    $stmt = $MySQLiconn->prepare("SELECT * FROM productos WHERE id=?");
    $stmt->bind_param("i", $_POST['id']);
    $stmt->execute();
    $arrayRowProd = $stmt->get_result()->fetch_array();
}

/*Modificar elemento seleccionado*/
if(isset($_POST['Modificar']))
{
    $stmt = $MySQLiconn->prepare("UPDATE productos SET nombre=?, cantidad=?, descripcion=? WHERE id=?");
    $stmt->bind_param("sisi", $_POST['txtnombre'],$_POST['txtcantidad'],$_POST['txtdescripcion'], $_POST['id']);
    $stmt->execute();
    header("Location: productos.php");
}

/*Botón cancelar*/
if(isset($_POST['Cancelar']))
{
    header("Location: productos.php");
}