<?php

$server="localhost";
$user="root";
$pass="";
$db="nutricion";

$conn = new mysqli($server, $user, $pass, $db);

if(!$conn){
    die("Conexión fallida");
}

?>