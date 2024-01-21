<?php
namespace App\Controllers;
// require "app/models/Product.php";
use App\Models\Product;

class ProductController 
{
    //trả về danh sách sản phẩm và chỉ định view
    public function listProduct() {
        $productModel = new Product(); //khởi tạo object từ class Product
        $products = $productModel->getAllProduct(); //gọi vào hàm getAllProduct
        include "app/views/Products.php"; //chỉ định views sẽ sử dụng
    }
}
?>
