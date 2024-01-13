<?php
    //lớp trừu tượng
    abstract class DongVat {
        //thuộc tính (attribute)
        //phương thức (method)
        //phương thức trừu tượng (abstract function)
        abstract public function tenFunction(); //chỉ khởi tạo, ko có logic code bên trong
        public function hamThuong() {
            //logic code xử lý
        }
    }
    class Cho extends DongVat {
        /* Khi một class kế thừa từ abstract class (lớp trừu tượng)
        thì bắt buộc phải overiding (ghi đè) lại các 
        abstract function (phương thức trừu tượng)
        */
        public function tenFunction() {
            //code xử lý logic
        }
        abstract public function abstractFunction() {
            //trong một class thường ko thể có abstract function (phương thức trừu tượng)
        }
    }

    // $tenObject = new ClassThuong(); //khởi tạo object từ một class thường
    // var_dump($tenObject); // => thành công
    // $objectTT = new TenClass(); //khởi tạo object từ abstract class (lớp trừu tượng)
    // => lỗi


    //interface
    interface TenInterface { //khởi tạo interface
        public $bien = 'bien';//lỗi => không được khai báo biến trong interface
        CONST Pi = 3.14; //có thể khai báo hằng số CONST
        public function tenFunction(); //khởi tạo function
    }

    interface HoatDong { //khởi tạo interface HoatDong có 2 phương thức là ăn và đứng
        public function chay();
        // public function an();
        // public function dung();
    }

    //class implements Interface thì phải ghi đè (overriding) tất cả các phương thức
    class ConNguoi implements HoatDong { 
        public function chay() {
            echo "2 chân";
        }
        // public function an() {
        //     echo "ăn tạp";
        // }
        // public function dung() {
        //     echo "2 chan";
        // }
    }

    class OtO implements HoatDong {
        public function chay() {
            echo "4 bánh";
        }
    }

    class Meo implements HoatDong {
        public function an() {
            echo "chuột";
        }
        public function dung() {
            echo "4 chan";
        }
    }

    //trait: là một module để hỗ trợ/mô phỏng đa kế thừa 
    //do php chỉ hỗ trợ đơn kế thừa (1 class chỉ có thể extends được một class)
    trait TraitMot {
        public function functionMot() {

        }
        public function getAll() {

        }
    }
    trait TraitHai {
        public function functionHai() {

        }
        public function getAll() {

        }
    }

    class NewClass {
        use TraitMot,TraitHai { //có thể use được nhiều Trait ở trong 1 class
            /*khi ở 2 trait có 2 function trùng tên thì có 2 cách xử lý:
            - C1: gán lại tên của 2 function ở trong use
            - C2: khi cần gọi hàm sẽ phải gọi kèm tên trait. VD: TraitMot::getAll(); TraitHai::getAll()
            */
            TraitMot::getAll as protected t1_myfunc;
            TraitHai::getAll as protected t2_myfunc;
        }

        public function getAll() {
            return t1_myfunc();
        }    
    }
?>