<?php

require_once SERVICE . 'Category.php';

if($_SERVER['REQUEST_METHOD'] === 'GET') {

    $category = Category::getCategorys();
    
    echo json_encode($category);

}
?>