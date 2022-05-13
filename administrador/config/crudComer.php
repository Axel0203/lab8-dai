<?php
include_once("bd.php");

/*-------------Comercios-------------*/
/*insertar comercio por prepared statement*/
if(isset($_POST['Agregar']))
{
    $idpais = $_POST['txtnompais'];
    $stmt2 = $MySQLiconn->prepare("SELECT nombre FROM paises WHERE id=?");
    $stmt2->bind_param("i", $idpais);
    $stmt2->execute();
    $pais = $stmt2->get_result()->fetch_array();
    $nompais = $pais['nombre'];

    $stmt = $MySQLiconn->prepare("INSERT INTO registro_comercios(tipo_flujo, nombre_pais, fecha) VALUES(?,?,?)");

    $stmt->bind_param("sss", $_POST['txtflujo'],$nompais,$_POST['dtfecha']);
    $stmt->execute();
}

/*eliminar comercio por prepared statement*/
if(isset($_POST['Borrar']))
{
    $stmt = $MySQLiconn->prepare("DELETE FROM registro_comercios WHERE id=?");
    $stmt->bind_param("i", $_POST['id']);
    $stmt->execute();
}

/*Seleccionar comercio y mostrar el nombre en el formulario por prepared statement*/
if(isset($_POST['Seleccionar']))
{
    $stmt = $MySQLiconn->prepare("SELECT * FROM registro_comercios WHERE id=?");
    $stmt->bind_param("i", $_POST['id']);
    $stmt->execute();
    $arrayRowComer = $stmt->get_result()->fetch_array();
}

/*Modificar elemento seleccionado*/
if(isset($_POST['Modificar']))
{
    $stmt = $MySQLiconn->prepare("UPDATE registro_comercios SET tipo_flujo=?, nombre_pais=?, fecha=? WHERE id=?");
    $stmt->bind_param("sssi", $_POST['txtflujo'],$_POST['txtnompais'],$_POST['dtfecha'], $_POST['id']);
    $stmt->execute();
    header("Location: comercios.php");
}

/*Botón cancelar*/
if(isset($_POST['Cancelar']))
{
    header("Location: comercios.php");
}