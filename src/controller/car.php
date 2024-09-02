<?php

require_once SERVICE . 'Apis.php';

if($_SERVER['REQUEST_METHOD'] === 'GET') {

    $idCar = $_GET['carro'];

    $url = "https://api.mercadolibre.com/items/$idCar";

    $api = new Apis($url);
    $response = $api->responseCar();

    echo json_encode($response);
}

?>