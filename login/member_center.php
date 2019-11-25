<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>會員中心</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

include_once "base.php";


//---這一段是用 session來做登入的紀錄控制----//
/* if (empty($_SESSION['login'])) { */

//---這一段是用 cookie來做登入的紀錄控制----//  
if (empty($_COOKIE['login'])) {  
  exit;
}

/* if (empty($_COOKIE['login'])) {
  exit;
} */
/* $dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo=new PDO($dsn, 'root','' ); */
/* $i=$_GET['id']; */

//---這一段是用 session來做登入的紀錄控制----//
/* $i=$_SESSION['id']; */

//---這一段是用 cookie來做登入的紀錄控制----//
$i=$_COOKIE['id'];
$sql= "select * from user where id='".$i."'";

/* $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC); */
$user=$pdo->query($sql)->fetch(); 


?></div>

  <div class="member">
    <div class="wellcome">
      
      <?php
      echo "<div class='ct'>HI!" .$user['name'].", 歡迎光臨!以下是你的個人資料: ";
           
      ?>    
           </div>

      <br><br>
      <div class="ct">
      <a href="logout.php">登出</a></div>

    </div>
    <br>
    <div class="private">
      <!--請自行設計個人資料的呈現方式並從資料庫取得會員資料-->

  <p>

  <form action="edit_user.php" method="post"> 
    <table class="wrapper" >
      <tr>
        <td>ID</td>
        <td><?=$user['id']?></td>
      </tr>
      <tr>
        <td>帳號</td>
        <td><?=$user['acc']?></td>
      </tr>
      <tr>
        <td>密碼</td>
        <td><?=$user['pw']?></td>
      </tr>
      <tr>
        <td>姓名</td>
        <td><input type="text" name="name" id="name" value="<?=$user['name']?>"></td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="text" name="birthday" id="birthday" value="<?=$user['birthday']?>"></td>
      </tr>
      <tr>
        <td>email</td>
        <td><input type="text" name="email" id="" value="<?=$user['email']?>"></td>
      </tr>
      <tr>
        <td>地址</td>
        <td><input type="text" name="addr" id="" value="<?=$user['addr']?>"></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="text" name="tel" id="tel" value="<?=$user['tel']?>"></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="送出編輯">
        </td>
      </tr>
        <input type="hidden" name="id" value="<?=$user['id']?>">
    </table>
</form>
<br>
    <div>
<?php
//---這一段是用 session來做登入的紀錄控制----//
/* if(!empty($_SESSION['login'])){ */

  //---這一段是用 cookie來做登入的紀錄控制----//
if(!empty($_COOKIE['login'])){  
  print <<<EOT
  <div class="ct"><a href="index.php" onclick="alert('你已經登入了喔!');">測試回首頁看看吧~</a></div>

  EOT;

}else{
  print <<<EOT
  <br>
  <a href="index.php" >回首頁 </a> 
  <br>

  EOT;  
}  
?>
    
    </div>




<?php
      /* 在<<<底下可大量直接使用 HTML 及""等符號 */
    print <<<EOT
  
    <br>

    <br>
    <br>
    <div class="ct">
      ---這邊有用到EOT做測試---</div>

     

EOT; 
?>    

    </div>
  </div>
</body>
</html>