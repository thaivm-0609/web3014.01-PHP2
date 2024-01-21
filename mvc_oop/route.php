<?php
use Phroute\Phroute\RouteCollector;

$url = isset($_GET['url']) ? $_GET['url'] : '/';
$router = new RouteCollector(); //khởi tạo 1 object từ class RouteCollector

/*request method: get/post/delete/any
    - get: dùng để lấy dữ liệu về
    - post: đẩy dữ liệu lên server
    - delete: xoá dữ liệu
    - any: phương thức nào cũng đc
*/
//$router->RequestMethod($route,$handler)
//2 tham số:
//$route: đường dẫn (url)
//$handler: hàm xử lý (viết trực tiếp function/điều hướng)
$router->get('/', [App\Controllers\ProductController::class,'listProduct']);

$router->group(['prefix' => 'admin'], function($router){
    $router->get('/products', [App\Controllers\ProductController::class,'listProduct']);
    $router->get('/users', [App\Controllers\ProductController::class,'listProduct']);
    $router->get('/comments', [App\Controllers\ProductController::class,'listProduct']);
});

/* ROUTE NOTE:
- Filter: lọc điều kiện của các route (kiểm tra user đã đăng nhập hay chưa)
- Prefix Group: gom nhóm những route có chung tiền tố (VD: /admin);
*/
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);


?>
