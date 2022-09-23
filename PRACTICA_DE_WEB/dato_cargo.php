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
$sql = "INSERT INTO cargo(id_cargo, cargo, sueldo, id_persona, id_area)
VALUES (40,'Ventas', 7000, 1,54 )
VALUES (41,'Ventas', 5333, 2,55 )
VALUES (42,'Ventas', 3000, 3,56 )
VALUES (43,'Ventas', 2000, 4,57 )
VALUES (44,'Ventas', 1000, 5,58 )
VALUES (45,'Ventas', 5000, 6,59 )
VALUES (46,'Ventas', 3000, 7,60 )
VALUES (47,'Ventas', 4000, 8,61 )
VALUES (48,'Ventas', 1000, 9,62 )
VALUES (49,'Ventas', 4000, 10,63 )
VALUES (50,'Ventas', 7000, 11,64 )
VALUES (51,'Ventas', 6000, 12,65 )
VALUES (52,'Ventas', 6000, 13,66 )
VALUES (53,'Ventas', 2000, 14,67 )
VALUES (54,'Ventas', 4000, 15,68 )";

if ($conn->query($sql) === TRUE) {
    echo "Tabla modifica correctamente";
  } else {
    echo "Error al modificar la tabla " . $conn->error;
  }
  
  $conn->close();
?>