<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Max-Age: 86400"); // Cache por 1 dia
    header("Content-Length: 0");
    header("Content-Type: text/plain");
    exit();
}

require_once 'config.php';
require_once "config-geral.php";
session_start();

$host = $_SERVER['HTTP_HOST'];

$isPage = isset($_GET['page']) ? $_GET['page'] : 'home';

if(file_exists(CONTROLLER . $isPage . '.php')) {
    include_once CONTROLLER . $isPage . '.php';
}else {
    echo 'Pagina não encontrada';
}

?>
