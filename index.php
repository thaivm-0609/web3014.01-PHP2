<?php 
include 'sinhvien.php';
include 'giangvien.php';

use SinhVien\sinhVien as SV; //alias
use GiangVien\giangVien;

$sv1 = new SV();
$sv1->setMaSV("PH123456");
$sv1->setHoTenSV("Nguyen Van B");
$sv1->setEmail("b@fpt.edu.vn");
$sv1->setNamSinh(2005);
$sv1->hienThiThongTin();
?>