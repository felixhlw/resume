
<style>
.blink {
    -webkit-animation: 2s linear infinite condemned_blink_effect; // for android
    animation: 2s linear infinite condemned_blink_effect;
}
@-webkit-keyframes condemned_blink_effect { // for android
    0% {
        visibility: hidden;
    }
    50% {
        visibility: hidden;
    }
    100% {
        visibility: visible;
    }
}
@keyframes condemned_blink_effect {
    0% {
        visibility: hidden;
    }
    50% {
        visibility: hidden;
    }
    100% {
        visibility: visible;
    }
}
</style>  


<?php
include_once "base.php";   //載入共用檔頭
/************************************* **************
 * 會員登入行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.從資料庫取得資料
 * 4.比對表單資料和資料庫資料是否一致
 * 5.根據比對的結果決定畫面的行為
  ***************************************************/

$acc=$_POST['acc'];
$pw=$_POST['pw'];


echo "你的帳號是: ".$acc;
echo "<br>";
echo "你輸入的密碼是: ".$pw;
echo "<br><br>";



/* $dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo=new PDO($dsn, 'root','' ); 
$sql="select count(*) as 'r' from user where acc='$acc' && pw='$pw'"; */

$sql="select * from user where acc='$acc' && pw='$pw'";

/* $pwd="select `pw` from user where acc='$acc'";  //從資料庫中抓取密碼資料
$data=$pdo->query($sql)->fetchColumn(); */

$data=$pdo->query($sql)->fetch();
/* $pp=$pdo->query($pwd)->fetch(); */
 

echo "檢查結果: ";
print_r($data);




echo "<br><br>";
/* echo"正確的密碼是: ";
print_r($pp[0]);
echo "<br><br>"; */

/* if ($data['r']==1) { */
  # code...

/* if($acc==$data['acc'] || $pw==$data['pw']){  //--測試用--// */
    
if(!empty($data)){
  echo "<h1 style='color:0000ff'; class='blink';>登入成功<h1>";

 //---這一段是用 session來做登入的紀錄控制----// 

/*   $_SESSION['login']=1;
  $_SESSION['id']=$data['id']; */
 /* header("location:member_center.php?id=".$data['id']);  */
 
 
 //---這一段是用 cookie來做登入的紀錄控制----//

 setcookie("login", 1 , time()+3600);
 setcookie("id", $data['id'], time()+3600);


 header("location:member_center.php"); 
 
  
}else{
  echo "<h1 style='color:ff0000'; class='blink';>登入失敗!<h1>";
  header("location:index.php?err=1");
}





?>