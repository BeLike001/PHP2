<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button>
    <a href="index.php?url=add_ct">thêm</a>
</button>
<table border="">

    <tr>
        <td>id</td>
        <td>ten</td>
        <td>tuoi</td>
        <td>thao tác</td>
    </tr>

    <tbody>
    <?php foreach ($customers as $key => $value){ ?>
    <tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['ten'] ?></td>
        <td><?= $value['tuoi'] ?></td>
        <th>
            <button type="button" >
                <a style="text-decoration: none" href="index.php?url=detail&id=<?= $value['id'] ?>">sửa</a>
            </button>
            <button type="button" >
                <a style="text-decoration: none" href="index.php?url=del_ct&id=<?= $value['id'] ?>">xóa</a>
            </button>
        </th>

    </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>