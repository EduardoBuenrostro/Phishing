<?php
// Activar la visualización de errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificar que el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Validar que los datos no están vacíos
    if (!empty($login) && !empty($password)) {
        // Crear un nombre único para el archivo usando la fecha y hora
        $filename = 'datos_' . date('Ymd_His') . '.txt';

        // Ruta al archivo de texto en el mismo directorio
        $filepath = './' . $filename;

        // Formatear los datos
        $data = "Nombre de Usuario: $login\nContraseña: $password\n\n";

        // Guardar los datos en el archivo
        if (file_put_contents($filepath, $data)) {
            echo "Datos guardados correctamente en $filename.";
        } else {
            echo "Error al guardar los datos.";
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>