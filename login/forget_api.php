<?php
include_once "base.php";
if (!empty($_POST['check'])){

    $chk=$_POST['check'];
}

$sql="select * from user where acc='$chk' || email='$chk'";

$data=$pdo->query($sql)->fetch();
/* print_r($data); */


/* echo "PHP 檢查 Email 格式"; */

echo "<h1>忘記密碼，查詢結果</h1>";
if (!empty($data)) {
    # code...
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST['check'])) {
        
        if(in_array($chk,$data)){
            echo "<div class='wrapper'>資料已驗證! 你的帳號是: ".$chk. "</div>";
            echo "<div class='wrapper'>你的密碼是: ".$data['pw']."</div>";
            echo "<div class='wrapper'><a href='forget.php'>重新查詢</a></div>";
        }else{
            echo"<div class='wrapper'>帳號不存在喔</div>";
            echo "<div class='wrapper'><a href='forget.php'>重新查詢</a></div>";
    }
    }else{
    
        if(in_array($chk,$data)){
            echo "<div class='wrapper'>資料已驗證! 你的Email是: ".$chk."</div>";
            echo "<div class='wrapper'>你的密碼是: ".$data['pw']."</div>";
            echo "<div class='wrapper'><a href='forget.php'>重新查詢</a></div>";
        }else{
           echo"<div class='wrapper'>email不存在喔</div>";
        }
    }
}else{
    echo"<div class='wrapper'>你查詢的資料不存在喔</div>";
    echo "<div class='wrapper'><a href='forget.php'>重新查詢</a></div>";
}

?>

<!-- C creat db table insert
R use db select table query data
U truncate update
D delete drop data -->






















