<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ BASE_URL .'./public/css/style.css' }}">
    <title>Document</title>
</head>
<body>
    <div>
        <header>
            <ul>
                <li><a>Quản lý sản phẩm</a></li>
                <li><a>Quản lý danh mục</a></li>
                <li><a>Quản lý người dùng</a></li>
            </ul>
        </header>
        @yield('content')
        <footer>Đây là footer</footer>
    </div>
</body>
</html>