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
$sql = "INSERT INTO area(id_area, area)
VALUES (54,'Marketing')
VALUES (55,'contabilidad')
VALUES (56,'direccion')
VALUES (57,'Marketing')
VALUES (58,'direccion')
VALUES (59,'Marketing')
VALUES (60,'direccion')
VALUES (61,'direccion')
VALUES (62,'Marketing')
VALUES (63,'contabilidad')
VALUES (64,'contabilidad')
VALUES (65,'Marketing')
VALUES (66,'contabilidad')
VALUES (67,'Marketing')
VALUES (68,'direccion')";

if ($conn->query($sql) === TRUE) {
    echo "Tabla modifica correctamente";
  } else {
    echo "Error al modificar la tabla " . $conn->error;
  }
  
  $conn->close();
?>