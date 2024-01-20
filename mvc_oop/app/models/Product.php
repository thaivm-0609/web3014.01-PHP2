<?php
require "app/models/db.php";

class Product extends db 
{
    //hàm truy vấn lấy toàn bộ product trong csdl
    public function getAllProduct() {
        $query = "SELECT * FROM san_pham WHERE 1";
        
        return $this->getData($query);
    }

    //hàm truy vấn top 10 sản phẩm trên hệ thống
    public function getTopTen() {
        
    }
}
?>
