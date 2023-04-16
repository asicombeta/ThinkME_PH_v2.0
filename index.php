<?php
/**
 * @author Armando Joel Rodriguez Sanchez <desarrollo@asicomsystems.com.mx>
 * @copyright ThinkME 2023
 * @Annotation Index del proyecto que va a validar si la aplicación se comporta como api o plataforma de usuario
 */
// Obtén la ruta de la petición actual
$requestUri = $_SERVER['REQUEST_URI'];


// Verifica si la ruta contiene "/api/documentar" para determinar si es una petición a la API
if (strpos($requestUri, '/api/documentar') !== false) {


    include_once('core/api/index.php');
    
} else {
        include_once('core/view/index.php');
}



