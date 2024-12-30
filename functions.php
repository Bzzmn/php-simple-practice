<?php

declare(strict_types=1);

# Inicializar una nueva sesion de cURL; ch = cURL handler
// $ch = curl_init(API_URL);

// Indicar que queremos obtener la respuesta y no mostrarla en pantalla
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* Ejecutar la solicitud 
y obtener la respuesta
*/
// $response = curl_exec($ch);

// Convertir la respuesta a un array asociativo
// $data = json_decode($response, true);
# Cerrar la sesion de cURL
// curl_close($ch);

function render_template(string $template, array $data = [])
{
    extract($data);
    require "templates/$template.php";
}
