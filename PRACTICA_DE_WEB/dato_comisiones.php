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
$sql = "INSERT INTO comisiones(id_comision, monto, concepto, fecha_comision, id_persona)
VALUES (20, 1500,'Venta_de_zapatos','2022-11-22', 1)
VALUES (21, 344,'Venta_de_comida','2022-14-21', 2)
VALUES (22 555,'Venta_de_productos','2022-31-09', 3)
VALUES (23, 433,'Venta_de_cosinas','2022-13-08', 4)
VALUES (24, 2600,'Venta_de_electrodomesticos','2022-11-10', 5)
VALUES (25, 6443,'Venta_de_zapatillas','2022-11-21', 6)
VALUES (26, 234,'Venta_de_balones','2022-11-22', 7)
VALUES (27, 2340,'Venta_de_chompas','2022-21-13', 8)
VALUES (28, 2400,'Venta_de_muebles','2022-21-14', 9)
VALUES (29, 2400,'Venta_de_cucharas','2022-17-21', 10)
VALUES (30, 1200,'Venta_de_zapatos','2022-11-21', 11)
VALUES (31, 1300,'Venta_de_muebles','2022-11-16', 12)
VALUES (32, 1400,'Venta_de_comida','2022-11-16', 13)
VALUES (33, 1200,'Venta_de_calzados','2022-11-12', 14)
VALUES (34, 1200,'Venta_de_petrolio','2022-11-12', 15)
";

if ($conn->query($sql) === TRUE) {
    echo "Tabla modifica correctamente";
  } else {
    echo "Error al modificar la tabla " . $conn->error;
  }
  
  $conn->close();
?>