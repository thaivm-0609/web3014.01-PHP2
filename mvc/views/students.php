<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach SV</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Mã SV</th>
            <th>Tên</th>
            <th>Email</th>
            <th>SĐT</th>
            <th>Ngày sinh</th>
        </tr>
        <?php foreach ($students as $student) {
            extract($student);
            ?>
            <tr>
                <td><?php echo $id ?></td>
                <td><?= $maSV ?></td>
                <td><?= $ten ?></td>
                <td><?= $email ?></td>
                <td><?= $sdt ?></td>
                <td><?= $ngay_sinh ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>