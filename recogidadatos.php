<?php
// Grupo Carlos, Luis e Isaac
// Comprueba que los datos han sido enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $asunto = $_POST['asunto'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $mensaje = $_POST['descripcion'] ?? '';


    // Creamos un array para la variable $post_data
    $post_data = array(
        'post_title' => $asunto, // Usamos asunto como título
        'post_content' => "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje", // Será el contenido del formulario
        'post_status' => 'publish', // Que nos haga llegar el formulario
        'post_type' => 'contactos_post_type' // Introducimos los datos en "Contactos"
    );

    // Insertamos la variable en la base da datos
    $post_id = wp_insert_post($post_data);

    if (!is_wp_error($post_id)) {
        // Si se envía correctamente
        echo "<h3>HEMOS RECIBIDO TU COMENTARIO, NOS PONDREMOS EN CONTACTO CONTIGO LO ANTES POSIBLE</h3>";
    } else {
        // Si falla el envío
        echo "<h3>OCURRIÓ UN ERROR AL ENVIAR LOS DATOS<h3>";
    }
} else {
    
}
