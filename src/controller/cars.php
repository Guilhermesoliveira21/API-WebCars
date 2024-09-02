<?php 

require_once SERVICE . 'Apis.php';

if($_SERVER['REQUEST_METHOD'] == "GET") {

    $searchCars = $_GET['carro'];

    $isSearchCars = isset($searchCars) ? $searchCars : 'veiculos';

    $url = 'https://api.mercadolibre.com/sites/MLB/search?q=';

    $api = new Apis($url);
    
    $api->setSearch($isSearchCars);
    $response = $api->responseSearch();

    echo json_encode($response);

}

?>