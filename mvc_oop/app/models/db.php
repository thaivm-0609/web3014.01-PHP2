<?php
class db {
    protected $dbhost = "localhost"; 
    protected $dbname = "web3014.01";
    protected $username = "root";
    protected $password = "";

    //hàm tạo kết nối với cơ sở dữ liệu
    public function getConnect() 
    {
        $connect = new PDO("mysql:host=" . $this->dbhost
            . ";dbname=" . $this->dbname,
            $this->username,
            $this->password
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