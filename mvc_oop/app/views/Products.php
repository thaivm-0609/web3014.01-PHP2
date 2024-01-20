<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Mô tả</th>
            <th>Số lượng</th>
            <th>Giá</th>
        </tr>
        <?php foreach($products as $product) { ?>
            <tr>
                <td><?=$product['id']?></td>
                <td><?=$product['ten_san_pham']?></td>
                <td><?=$product['mo_ta']?></td>
                <td><?=$product['so_luong']?></td>
                <td><?=$product['gia']?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>