<?php
include_once("bd.php");

/* -----------PAÍSES----------- */
/*insertar pais por prepared statement*/
if(isset($_POST['Agregar']))
{
    $stmt = $MySQLiconn->prepare("INSERT INTO paises(nombre, relacion, fecha_creacion, descripcion) VALUES(?,?,?,?)");
    $stmt->bind_param("ssss", $_POST['txtnombre'],$_POST['txtrelacion'],$_POST['dtfecha'],$_POST['txtdescripcion']);
    $stmt->execute();
}

/*eliminar pais por prepared statement*/
if(isset($_POST['Borrar']))
{
    $stmt = $MySQLiconn->prepare("DELETE FROM paises WHERE id=?");
    $stmt->bind_param("i", $_POST['id']);
    $stmt->execute();
}

/*Seleccionar país y mostrar el nombre en el formulario por prepared statement*/
if(isset($_POST['Seleccionar']))
{
    $stmt = $MySQLiconn->prepare("SELECT * FROM paises WHERE id=?");
    $stmt->bind_param("i", $_POST['id']);
    $stmt->execute();
    $arrayRow = $stmt->get_result()->fetch_array();
}

/*Modificar elemento seleccionado*/
if(isset($_POST['Modificar']))
{
    $stmt = $MySQLiconn->prepare("UPDATE paises SET nombre=?, relacion=?, fecha_creacion=?, descripcion=? WHERE id=?");
    $stmt->bind_param("ssssi", $_POST['txtnombre'],$_POST['txtrelacion'],$_POST['dtfecha'],$_POST['txtdescripcion'], $_POST['id']);
    $stmt->execute();
    header("Location: paises.php");
}

/*Botón cancelar*/
if(isset($_POST['Cancelar']))
{
    header("Location: paises.php");
}