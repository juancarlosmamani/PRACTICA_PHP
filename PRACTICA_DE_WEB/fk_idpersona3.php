<?php
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="practicaBD01";

 $conn = new  mysqli($host,$dbusername,$dbpassword,$dbname);

    if($conn-> connect_error){
        die ("fallo la conexión: <br> ". $conn->connect_error);

    }else {
        echo "conexion correcta <br>";
    }

    //sql 

    $sql="ALTER TABLE destino ADD CONSTRAINT destino_persona
    FOREIGN KEY (id_persona) REFERENCES persona (id_persona)";

    if ($conn->query ($sql)===TRUE)
    {
        echo "CLAVE CREADA CORRECTAMENTE";

    }else {
        echo "NO SE PUDO CREAR LA CLAVE  ". $conn ->error;

    }
    $conn->close ();
?>