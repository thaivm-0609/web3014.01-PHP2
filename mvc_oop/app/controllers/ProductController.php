<?php
namespace App\Controllers; //quy tắc đặt namespace, viết hoa cữ cái đầu

use App\Models\Product;

class ProductController 
{
    public $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }
    //trả về danh sách sản phẩm và chỉ định view
    public function listProduct() {
        $products = $this->productModel->getAllProduct(); //gọi vào hàm getAllProduct
        include "app/views/Products.php"; //chỉ định views sẽ sử dụng
    }

    public function newPro() {
        echo "Đây là trang new pro";
    }

    public function inActivePro() {
        echo "Đây là trang inactive pro";
    }

    public function productDetail($id) {
        
    }

    public function edit($id) { //trả về form update và fill dữ liệu cũ
       $product = $this->productModel->getById($id);
       include "app/views/products/update.php";
    }

    public function update($id) { //update bản ghi

    }
}
?>
