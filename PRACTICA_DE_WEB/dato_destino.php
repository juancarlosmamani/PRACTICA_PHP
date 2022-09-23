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
$sql = "INSERT INTO destino(id_destino, destino, fecha_llegada, fecha_salida, id_persona)
VALUES (11,'Santa_Cruz','2022-07-27','2022-06-10', 1)
VALUES (12,'Santa_Cruz','2022-07-27','2022-06-10', 2)
VALUES (13,'oruro','2022-07-27','2022-06-10', 3)
VALUES (14,'Santa_Cruz','2022-07-27','2022-06-10', 4)
VALUES (15,'potosi','2022-07-27','2022-06-10', 5)
VALUES (16,'Santa_Cruz','2022-07-27','2022-06-10', 6)
VALUES (17,'tarija','2022-07-27','2022-06-10', 7)
VALUES (18,'Santa_Cruz','2022-07-27','2022-06-10', 8)
VALUES (19,'cobija','2022-07-27','2022-06-10', 9)
VALUES (20,'cobija','2022-07-27','2022-06-10', 10)
VALUES (21,'Santa_Cruz','2022-07-27','2022-06-10', 11)
VALUES (22,'cochabamba','2022-07-27','2022-06-10', 12)
VALUES (23,'Santa_Cruz','2022-07-27','2022-06-10', 13)
VALUES (24,'Santa_Cruz','2022-07-27','2022-06-10', 14)
VALUES (25,'Santa_Cruz','2022-07-27','2022-06-10', 15)
";

if ($conn->query($sql) === TRUE) {
    echo "Tabla modifica correctamente";
  } else {
    echo "Error al modificar la tabla " . $conn->error;
  }
  
  $conn->close();
?>