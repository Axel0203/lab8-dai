<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "lab8";

$MySQLiconn = new MySQLi($host,$user,$pass,$db);

if($MySQLiconn->connect_errno){
    die("ERROR : -> ".$MySQLiconn->connect_error);
}