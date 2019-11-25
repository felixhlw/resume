<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>尋回密碼</title>
  <link rel="stylesheet" href="style.css">
  <style>
    input[type='text']{
      color: red;
      line-height:28px ;
      margin-right: -20px;
    }
  </style>
</head>
<body>


<h1>找回密碼</h1>
<form action="forget_api.php" method="POST">
<table class="wrapper">
<!---------設計表單內容---------->
<tr>
    <td class="ct reg">
      <input type="text" name="check" value="請輸入你的帳號或email...">
    </td>  
    <td class="ct reg"> 
      <input type="submit" >
    </td>
</tr>
<tr>
    <td colspan="2" class="ct reg">
      <a href="index.php">或是...回首頁</a>
    </td>
  </tr>
</table>
</form>
</body>
</html>
