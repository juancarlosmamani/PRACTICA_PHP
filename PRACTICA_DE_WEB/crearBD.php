<?php
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname= "practicaBD01";

    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if (mysqli_connect_error()){
        die ('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    echo "CONEXION CORRECTA";
    $sql ="CREATE DATABASE practicaBD01";
    if($conn->query ($sql)==TRUE){
        echo "BASE DE DATOS CREADA CORRECTAMENTE";
    }else {
        echo "ERROR AL CREAR LA TABLA ". $conn->error;
    }
    $conn->close();

?>