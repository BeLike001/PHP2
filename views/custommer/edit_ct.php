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
<?php foreach ($CT_detal as $key => $value){ ?>
<form method="post">
    <input type="text" name="ten" value="<?= $value['ten']?>" required>
    <input type="text" name="tuoi" value="<?= $value['tuoi']?>" required>
    <div>
        <button type="submit" name="edit">sửa</button>
    </div>
    <?php } ?>
</form>


</body>
</html>