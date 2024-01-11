<?php
namespace SinhVien;

//class cha 
class sinhVien {
    /*
    4 tính chất của OOP
    1. Đa hình
    2. Đóng gói
    3. Trừu tượng
    4. Kế thừa
    */

    //tính đóng gói
    //public: công khai, ai cũng có quyền truy cập
    //protected: chỉ những thành phần kế thừa ms có thể sử dụng được
    //private: chỉ bản thân nó được sử dụng
    public $maSV;
    public $hoTenSV;
    public $email;
    public $namSinh;

    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';

    // public function __construct($maSV,$hoTenSV,$email,$namSinh) {
    //     $this->maSV = $maSV;
    //     $this->hoTenSV = $hoTenSV;
    //     $this->email = $email;
    //     $this->namSinh = $namSinh;
    // }

    //psuedo (biến giả): $this
    //method: phương thức
    public function hienThiThongTin() {
        echo $this->maSV."-".$this->hoTenSV."-".$this->tinhTuoi();
    }

    public function tinhTuoi() {
        return $date = date('Y') - $this->namSinh;
    }

    public function setMaSV($maSV) {
        $this->maSV = $maSV;
    }
    public function setHoTenSV($hoTenSV) {
        $this->hoTenSV = $hoTenSV;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setNamSinh($namSinh) {
        $this->namSinh = $namSinh;
    }

    public function test() {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

//class con kế thừa từ class SinhVien
class SinhVienCNTT extends SinhVien {
    public function test2() {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

//bên ngoài class;
$sv = new SinhVien();
// $sv->test();
$svCNTT1 = new SinhVienCNTT();
// echo $svCNTT1->public;
// echo $svCNTT1->protected;
// echo $svCNTT1->private;
// $svCNTT1->test2();
//khởi tạo object SV1
// $sv1 = new sinhVien("PHxxxxx","Nguyen Van A", "a@fpt.edu.vn",2004);
// $sv1->hienThiTenSV();

// $sv1 = new sinhVien();
// $sv2 = new sinhVien();

// var_dump($sv1==$sv2,$sv1===$sv2);
// $sv2->setMaSV("PH12345");
// $sv2->setHoTenSV("Sinh Vien 2");
// $sv2->setEmail("sv2@fpt.edu.vn");
// $sv2->setNamSinh(2005);
// $sv2->hienThiTenSV();

//overriding
class HinhChuNhat {
    function __construct($chieuDai,$chieuRong) {
        $this->chieuDai = $chieuDai;
        $this->chieuRong = $chieuRong;
    }
}

class HinhVuong extends HinhChuNhat {
    function __construct($canh) {
        $this->chieuDai = $canh;
        $this->chieuRong = $canh;
    }
}

$hinhVuong = new HinhVuong(5,5);
$hinhVuong2 = new HinhVuong(5);
var_dump($hinhVuong, $hinhVuong2);

?>