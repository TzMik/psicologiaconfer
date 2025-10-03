<?php
// 1. Determinar el protocolo (http o https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';

// 2. Obtener el nombre del host (dominio)
$host = $_SERVER['HTTP_HOST'];

// 3. Obtener la URI de la solicitud actual (incluyendo la ruta y parámetros)
// NOTA: Para el canonical, es mejor usar REQUEST_URI o SCRIPT_NAME para la URL base
// y luego limpiar los parámetros que no son necesarios para el canonical (ej: IDs de sesión).
// En este ejemplo simple, usamos REQUEST_URI.
$request_uri = $_SERVER['REQUEST_URI'];

// Si tu URL canonical DEBE terminar con '/', puedes usar:
// $request_uri = rtrim($request_uri, '/');
// if (empty($request_uri)) {
//     $request_uri = '/';
// }

// 4. Construir la URL canonical completa
$canonical_url = $protocol . $host . $request_uri;
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bienvenido a mi sitio MVC</title>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/styles.css?v=<?= time() ?>">
<meta name="description" content="Terapia Sistémica y TCC para sanar, reconstruirte y empoderarte. Especialista en empoderamiento femenino y apoyo integral a la comunidad LGBT+. Agenda tu espacio seguro.">
<link rel="canonical" href="<?= $canonical_url ?>">
