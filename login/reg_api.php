<?php
/***************************************************
 * 會員註冊行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.建立所需的SQL語法
 * 4.將表單資料以變數形式填入SQL語法中
 * 5.執行資料庫連線並送出SQL語法
 * 6.判斷SQL語法是否執行成功，執行下一步
 ***************************************************/
include('base.php');

$data['acc']=$_POST['acc'];
$data['pw']=$_POST['pw'];
$data['name']=$_POST['name'];
$data['addr']=$_POST['addr'];
$data['tel']=$_POST['tel'];
$data['birthday']=$_POST['birthday'];
$data['email']=$_POST['email'];


//insert into user () values();
/* $dsn="mysql:host=localhost;charset=utf8;dbname=mydb"; //連接資料庫
$pdo=new PDO($dsn,'root','');  //以pdo型態連接 */


/* $sql="insert into user (`acc`,`pw`,`name`,`addr`,`tel`,`birthday`,`email`) values
 ('$acc','$pw','$name','$addr','$tel','$birthday','$email')"; */

/*  echo "sql語法是: ".$sql."<br>"; */

/*  $rows=$pdo->query($sql);
 print_r($rows);
 echo "<br>"; */

 //$pdo->exec($sql) 用在不回傳資料時，像是update, del,insert 
//echo $pdo->exec($sql);


/* if($pdo->exec($sql)){ */
if (insert("user",$data)) {
    # code...
    
/*     echo"新增資料成功"; */

    header("location:index.php?s=1");

}else{
/*     echo"請檢查輸入內容並重來一次"; */
    header("location:reg.php?s=2");

} 


?>