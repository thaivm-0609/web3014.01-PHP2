<?php
namespace App\Controllers; //quy tắc đặt namespace, viết hoa cữ cái đầu

use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController
{
    public $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }
    //trả về danh sách sản phẩm và chỉ định view
    public function listProduct() {
        $products = $this->productModel->getAllProduct(); //gọi vào hàm getAllProduct
        $test = "đây là biến";
        // include "app/views/products/list.php"; //chỉ định views sẽ sử dụng
        $this->render('products.list',compact('products','test'));
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
    //    include "app/views/products/update.php";
        $this->render('products.update', compact('product'));
    }

    public function update($id) { //update bản ghi

    }
}
?>
