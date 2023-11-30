<?php

// Recibir datos de un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require('conexion.php');

    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['contrasena'];
    $ciudad = $_POST['ciudad'];
    $calle = $_POST['calle'];
    $cod_pst = $_POST['codigo_postal'];

    // Insertar en la tabla dirección
    $sql = "INSERT INTO direccion (Calle, Ciudad, Codigo_Postal) VALUES ('$calle', '$ciudad', '$cod_pst')";
    if ($conexion->query($sql) === TRUE) {
        $direccion_id = $conexion->insert_id;

        // Insertar en la tabla cliente
        $sql = "INSERT INTO cliente (Nombre, Email, Direccion_id, Contrasena, FechaRegistro) VALUES ('$name', '$email', '$direccion_id', '$password', NOW())";

        if ($conexion->query($sql) === TRUE) {
            echo "Datos guardados correctamente";
        } else {
            echo "Error en insertar tabla cliente: " . $conexion->error;
        }
    } else {
        echo "Error en insertar tabla dirección: " . $conexion->error;
    }

    // Cerrar conexión
    $conexion->close();
}
?>
