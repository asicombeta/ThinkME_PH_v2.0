<?php




if (isset($_GET['apikey'])) {
    echo 'Bienvenido accediste a traves de la api de thinkme-ph <p>';
    echo '</p>Esta es tu api key: ' . $_GET['apikey'];
}

if(empty($_GET['apikey'])){
    $errorResponse = array('error' => 'Falta API KEY', 'status'=>'400');
    echo json_encode($errorResponse);
    http_response_code(400);
    exit;
}


