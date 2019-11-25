<?php
include_once "base.php"; 

//---這一段是用 session來做登入的紀錄控制----//

/* if (!empty($_SESSION['login'])) { 
  header("location:member_center.php");
  } */

//---這一段是用 cookie來做登入的紀錄控制----//

  if (!empty($_COOKIE['login'])) {
    header("location:member_center.php");
}

?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>註冊登入系統</title>
  <link rel="stylesheet" href="style.css">

</head>



<body>

<?php

if(!empty($_GET['s'])){
 echo "註冊成功，請以帳號密碼登入系統";
}

if(!empty($_GET['err'])){
  echo "<div class='err ct blink'>登入失敗囉，請檢查帳號或密碼</div>";


  //---這一段是用 session來做登入的紀錄控制----//  
 
/* }elseif(empty($_SESSION['login'])){
  echo "<div class='err ct blink'>你尚未登入，請登入!</div>";
  echo "<br>";
} */

//---這一段是用 cookie來做登入的紀錄控制----//

}elseif(empty($_COOKIE['login'])){
  echo "<div class='err ct blink'>你尚未登入，請登入!</div>";
  echo "<br>";
}

?>

  <h1>會員登入</h1>
  
<form action="login_api.php" method="post"> 
<table class="wrapper">
  <tr>
    <td>帳號：</td>
    <td><input type="text" name="acc" id="acc"></td>
  </tr>
  <tr>
    <td>密碼：</td>
    <td><input type="password" name="pw" id="pw"></td>
  </tr>
  <tr>
    <td colspan="2" class="ct">
        <input type="submit" value="登入">
        <input type="reset" value="重置">
    </td>
  </tr>
  <tr>
    <td colspan="2" class="ct">
      <a href="reg.php" class="reg">註冊會員</a> 
      <a href="forget.php" class="reg">忘記密碼</a>
    </td>
  </tr>
</table>
</form>   
</body>
</html>
