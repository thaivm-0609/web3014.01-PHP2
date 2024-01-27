<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
</head>
<body>
    <h1><?=$product['ten_san_pham']?></h1>

    <form action="<?=route('products/'.$product['id'].'/update')?>" method="POST">
        <label for="">Product name</label>
        <input type="text" name="name" value="<?=$product['ten_san_pham']?>">
        <br />
        <label for="">Description</label>
        <input type="text" name="description" value="<?=$product['mo_ta']?>">
        <br />
        <label for="">Product quantity</label>
        <input type="number" name="quantity" value="<?=$product['so_luong']?>">
        <br />
        <label for="">Product price</label>
        <input type="number" name="price" value="<?=$product['gia']?>">
        <br />
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>