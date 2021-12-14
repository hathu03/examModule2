<!--<table class="table">-->
<!--    <thead class="thead-dark">-->
<!--        <th>Id</th>-->
<!--        <th>Name</th>-->
<!--        <th>Category</th>-->
<!--        <th></th>-->
<!--        <th colspan="2">Action</th>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--        --><?php //if (isset($products) || !empty($products)): ?>
<!--        --><?php //foreach ($products as $product): ?>
<!--            <tr>-->
<!--                <td>--><?php //echo $product->id?><!--</td>-->
<!--                <td>--><?php //echo $product->name?><!--</td>-->
<!--                <td>--><?php //echo $product->category?><!--</td>-->
<!--            </tr>-->
<!--        --><?php //endforeach; ?>
<!--        --><?php //else: ?>
<!--            <tr>-->
<!--                <td>Not found data!</td>-->
<!--            </tr>-->
<!--        --><?php //endif; ?>
<!--    </tbody>-->
<!--</table>-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Danh Sách Mặt Hàng</title>
    <style>
        #right {
            float: right;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        #left {
            float: left;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        th {
            background: #28a745;
            color: white;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body style="padding-right: 50px; padding-left: 50px">
<h2 style="text-align: center; margin-top: 20px">Danh Sách Mặt Hàng</h2>
<div id="left">
    <form method="get" class="form-inline my-2 my-lg-0">
        <span>Nhập Tên Hàng: </span> &ensp;
        <input class="form-control mr-sm-2" type="search"
               name="search" aria-label="Search">
        <button class="btn btn-success" type="submit">Tìm kiếm</button>
    </form>
</div>
<div id="right"><a href="index.php?page=product-create" type="button" class="btn btn-success">Thêm mặt hàng</a></div>
<!--<a href="index.php?page=product-create" >Thêm mặt hàng</a>-->

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên hàng</th>
        <th scope="col">Loại hàng</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($products)) {
        foreach ($products as $key => $product): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $product->name ?></td>
                <td><?php echo $product->category ?></td>
                <td><a href="index.php?page=product-update&id=<?php echo $product->id ?>">Chỉnh sửa</a> |
                    <a onclick="return confirm('Mày chắc chưa?')" href="index.php?page=product-delete&id=<?php echo $product->id ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach;

    } ?>
    </tbody>
</table>
</body>
</html>