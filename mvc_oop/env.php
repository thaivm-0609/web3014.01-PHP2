<?php
CONST DBHOST = "localhost";
CONST DBNAME = "web3014.01";
CONST USERNAME = "root";
CONST PASSWORD = "";

//đường dẫn cơ sở
CONST BASE_URL="http://localhost/web3014.01/mvc_oop/";

//function route để nối chuỗi route vào đường dẫn cơ sở
function route($url) {
    return BASE_URL.$url;
}
?>