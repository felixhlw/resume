<link rel="stylesheet" href="style.css">
<?php

include_once('base.php');
/* $sql="select * from user where acc='$_cookie['id']'"; */  //從cookie取得已登入的id

$name=$_POST['name'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
$birthday=$_POST['birthday'];
$email=$_POST['email'];
$id=$_POST['id'];


$sql="update user set name='$name', birthday='$birthday', email = '$email',addr='$addr',tel='$tel'  
        WHERE user.id = '$id'";

$pdo->exec($sql); //檢查是否有資料，並執行

/* print_r($sql); */

echo "<h1></h1><br><div class='wrapper ct'><a href='member_center.php'>已完成更新! 回會員中心</a></div>";

?>