<?php
require_once "app\controllers\ProductController.php";

$url = isset($_GET['url']) 
    ? $_GET['url'] 
    : '/';

switch ($url) {
    case '/': 
        $productController = new ProductController();
        $productController->listProduct();
        break;
}
?>
