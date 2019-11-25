<?php
/* session_start(); */

setcookie("login","",time()-3600);
setcookie("id","",time()-3600);


unset($_SESSION['login']);
unset($_SESSION['id']);  



header("location:index.php");


?>