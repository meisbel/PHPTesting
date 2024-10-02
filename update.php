<?php
require_once "./conexion.php";
include_once "./usuario.php";

// Obtener los datos enviados por el formulario
$id = $_POST['ID'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];

// Crear una instancia de la clase Usuario
$usuario = new Usuario();

// Actualizar los datos del usuario
try {
    if ($usuario->editUser($id, $nombre, $edad, $sexo)) {
        // Redirigir a la página de lista si la actualización es exitosa
        header("Location: index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el usuario.";
    }
} catch (PDOException $e) {
    // Manejar excepciones generales
    echo "Error inesperado: " . $e->getMessage();
}