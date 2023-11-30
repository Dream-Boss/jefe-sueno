<?php
// Conexión a la base de datos
require('conexion.php');

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Insertar producto en la base de datos
$sql = "INSERT INTO producto (producto_id, Catalogo, Descripción, Precio_pro, Marca, Categoria, Cantidad) VALUES ('Producto 1', 100, 'Descripción del producto 1')";

if ($conexion->query($sql) === TRUE) {
    echo "Producto insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cerrar conexión
$conexion->close();
?>