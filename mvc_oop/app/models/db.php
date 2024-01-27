<?php
namespace App\Models;

use PDO;

//tên file trùng tên class
class db {
    //chuyển sang file env.php;
    // protected $dbhost = "localhost"; 
    // protected $dbname = "web3014.01";
    // protected $username = "root";
    // protected $password = "";

    //hàm tạo kết nối với cơ sở dữ liệu
    public function getConnect() 
    {
        $connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME,
            USERNAME,
            PASSWORD
        );

        return $connect;
    }

    //hàm lấy dữ liệu từ cơ sở dữ liệu
    //nhận tham số đầu vào là 1 câu truy vấn
    public function getData($query) {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    //query by ID
    public function getDataById($query) {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch();
    }
}
?>