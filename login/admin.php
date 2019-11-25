<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">


    <style>
  table{
    border-collapse:collapse;
    border-spacing:0;
  }
  td{
    border:1px solid #ccc;
    padding:10px;
    text-align:center;
    min-width: 120px;
    max-width: 300px;
  }
  </style>
</head>
<body>
  










<table class="wrapper">
    <tr >
        <td>id</td>
        <td>acc</td>
        <td>pw</td>
        <td>name</td>
        <td>birthday</td>
        <td>email</td>
        <td width="80px">addr</td>
        <td>tel</td>
        <td>操作</td>
    </tr>

<?php
include_once "base.php";
$sql="select * from user";
$all=$pdo->query($sql)->fetchAll(); //取出全部資料

foreach ($all as $user) {
?>    
    <tr >
        <td><?=$user['id'];?></td>
        <td><?=$user['acc'];?></td>
        <td><?=$user['pw'];?></td>
        <td><?=$user['name'];?></td>
        <td><?=$user['birthday'];?></td>
        <td><?=$user['email'];?></td>
        <td><?=$user['addr'];?></td>
        <td><?=$user['tel'];?></td>
        <td>
        <form action="del_user.php" method="post">
            <input type="hidden" name="id" value="<?=$user['id'];?>">
            <input type="submit" value="刪除">
        </form>
        </td>
    </tr>

<?php    
}
?>
</table>


</body>
</html>