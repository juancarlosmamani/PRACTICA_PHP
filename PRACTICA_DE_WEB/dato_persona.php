<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practicaBD01";

// Creando la conexion
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conexión correcta";

// SQL para crear las tablas
$sql = "INSERT INTO persona(id_persona, nombres, apellidoP, apeliidoM, ci)
VALUES (1,'juan carlos','mamani','pati',9864424)
VALUES (2,'abel','quispe','mamani',45345345)
VALUES (3,'ariel','mamani','huanca',233233)
VALUES (4,'veronica','peralta','perez',2234243)
VALUES (5,'rafael','perez','mamani',234352)
VALUES (6,'jhottam','quispe','ramires',234523)
VALUES (7,'natalis','casas','aruquipa',432544)
VALUES (8,'joel','calderon','poma',345223)
VALUES (9,'marlena','mamani','quispe',345564)
VALUES (10,'wilfredo','mamani','pati',6454343)
VALUES (11,'monica','mamani','pati',435232)
VALUES (12,'elizabeth','ramos','valle',2345233)
VALUES (13,'sofia','quispe','colque',324523)
VALUES (14,'ivonne','mamani','mamani',234666)
VALUES (15,'jhon','mamani','mamani',234555)";


if ($conn->query($sql) === TRUE) {
    echo "Tabla modifica correctamente";
  } else {
    echo "Error al modificar la tabla " . $conn->error;
  }
  
  $conn->close();
?>