<?php
class db {
    CONST DBHOST = "localhost"; 
    CONST DBNAME = "web3014.01";
    CONST USERNAME = "root";
    CONST PASSWORD = "";

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
}
?>