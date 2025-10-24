<?php
// Verificar si el formulario fue enviado y si no hubo errores en el envío del archivo
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['archivo'])) {
    // Variables para el archivo
    $archivo = $_FILES['archivo'];
    
    // Comprobar si hubo errores al subir el archivo
    if ($archivo['error'] == UPLOAD_ERR_OK) {
        // Obtener el nombre y el tipo del archivo
        $nombreArchivo = $archivo['name'];
        $tipoArchivo = $archivo['type'];
        $tmpArchivo = $archivo['tmp_name']; // El archivo temporal en el servidor
        $tamañoArchivo = $archivo['size'];

        // Directorio donde se almacenará el archivo subido
        $directorioDestino = 'uploads/';

        // Asegurarse de que el directorio existe
        if (!is_dir($directorioDestino)) {
            mkdir($directorioDestino, 0777, true); // Crear el directorio si no existe
        }

        // Definir una ruta completa para guardar el archivo
        $rutaDestino = $directorioDestino . basename($nombreArchivo);

        // Verificar el tipo de archivo (por ejemplo, solo imágenes JPG y PNG)
        $tiposPermitidos = ['image/jpeg', 'image/png', 'application/pdf']; // Ejemplo con imágenes y PDFs
        if (in_array($tipoArchivo, $tiposPermitidos)) {
            // Verificar el tamaño máximo (por ejemplo, 2MB)
            $maxTamaño = 2 * 1024 * 1024; // 2MB en bytes
            if ($tamañoArchivo <= $maxTamaño) {
                // Mover el archivo desde el temporal al directorio de destino
                if (move_uploaded_file($tmpArchivo, $rutaDestino)) {
                    echo "El archivo se ha subido correctamente: " . $nombreArchivo;
                } else {
                    echo "Hubo un error al mover el archivo.";
                }
            } else {
                echo "El archivo es demasiado grande. El tamaño máximo permitido es 2MB.";
            }
        } else {
            echo "Tipo de archivo no permitido. Solo se aceptan imágenes JPG, PNG y archivos PDF.";
        }
    } else {
        // Mostrar el error si hubo problemas con la subida
        echo "Error al subir el archivo. Código de error: " . $archivo['error'];
    }
} else {
    echo "No se ha recibido ningún archivo.";
}
?>
