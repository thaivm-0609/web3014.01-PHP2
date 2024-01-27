<?php
use Phroute\Phroute\RouteCollector;
use App\Controllers\ProductController;

$url = isset($_GET['url']) ? $_GET['url'] : '/';
$router = new RouteCollector(); //khởi tạo 1 object từ class RouteCollector

/* ROUTE NOTE:
- Filter: lọc điều kiện của các route (kiểm tra user đã đăng nhập hay chưa)
- Prefix Group: gom nhóm những route có chung tiền tố (VD: /admin);
*/
$router->filter('auth', function () {
    if (!isset($_SESSION['user'])) {
        header(location: '/login');

        return false;
    }
});
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
$router->get('/', [ProductController::class,'listProduct']);
$router->get('/new-product', [ProductController::class,'newPro']);
$router->get('/inactive-product', [ProductController::class,'inActivePro']);
$router->get('/login', function () {
    echo "đây là trang đăng nhập";
});
$router->get('/products/{id}/edit', [ProductController::class, 'edit']); //trả về form cập nhật thông tin
$router->post('/products/{id}/update', [ProductController::class, 'update']);
$router->group(['before' => 'auth','prefix' => 'admin'], function($router){
    $router->get('/products', [App\Controllers\ProductController::class,'listProduct']);
    $router->get('/users', [App\Controllers\ProductController::class,'listProduct']);
    $router->get('/comments', [App\Controllers\ProductController::class,'listProduct']);
});

$router->get('/products/{id}', [ProductController::class,'productDetail']);
// $router->get('/admin/users', function () {
//     echo "Đây là trang quản trị users";
// }); 
// $router->get('/admin/products', function () {
//     echo "Đây là trang quản trị products";
// }); 
// $router->get('/admin/comments'); 


$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);


?>
