<?php
include_once("bd.php");

/*------------USUARIOS---------------*/
/*insertar usuario por prepared statement*/
if(isset($_POST['Agregar']))
{
    $stmt = $MySQLiconn->prepare("INSERT INTO usuarios(nombres, apellidos, user, password) VALUES(?,?,?,?)");
    $stmt->bind_param("ssss", $_POST['txtnombres'],$_POST['txtapellidos'],$_POST['txtuser'],$_POST['txtpsw']);
    $stmt->execute();
}

/*eliminar usuario por prepared statement*/
if(isset($_POST['Borrar']))
{
    $stmt = $MySQLiconn->prepare("DELETE FROM usuarios WHERE id=?");
    $stmt->bind_param("i", $_POST['id']);
    $stmt->execute();
}

/*Seleccionar usuario y mostrar el nombre en el formulario por prepared statement*/
if(isset($_POST['Seleccionar']))
{
    $stmt = $MySQLiconn->prepare("SELECT * FROM usuarios WHERE id=?");
    $stmt->bind_param("i", $_POST['id']);
    $stmt->execute();
    $arrayRowUser = $stmt->get_result()->fetch_array();
}

/*Modificar elemento seleccionado*/
if(isset($_POST['Modificar']))
{
    $stmt = $MySQLiconn->prepare("UPDATE usuarios SET nombres=?, apellidos=?, user=?, password=? WHERE id=?");
    $stmt->bind_param("ssssi", $_POST['txtnombres'],$_POST['txtapellidos'],$_POST['txtuser'],$_POST['txtpsw'], $_POST['id']);
    $stmt->execute();
    header("Location: usuarios.php");
}

/*Botón cancelar*/
if(isset($_POST['Cancelar']))
{
    header("Location: usuarios.php");
}