<?php
namespace App\Models;

use App\Models\db;

class Product extends db 
{
    protected $table="san_pham";

    //hàm truy vấn lấy toàn bộ product trong csdl
    public function getAllProduct() {
        $query = "SELECT * FROM ".$this->table." WHERE 1";
        
        return $this->getData($query);
    }

    //hàm truy vấn top 10 sản phẩm trên hệ thống
    public function getTopTen() {
        
    }

    //hàm truy vấn theo id
    public function getById($id) {
        $query = "SELECT * FROM ".$this->table." WHERE id=".$id;

        return $this->getDataById($query);
    }
}
?>
