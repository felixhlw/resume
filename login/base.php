<link rel="stylesheet" href="style.css">
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=mydb"; //連接資料庫
$pdo=new PDO($dsn,'root','');  //以pdo型態連接

session_start();

function all($table){
    global $pdo; //引入全域變數
    $sql="select * from $table";
    
    return $pdo->query($sql)->fetchAll();
    }


function find($table,$id){
    global $pdo; //引入全域變數
    $sql="select * from $table where id='$id'";
    return $pdo->query($sql)->fetch();    
}



function insert($table,$data){
    global $pdo; //引入全域變數
    $rows="`".implode("`,`",array_keys($data))."`";
    $value="'".implode("','",$data)."'";
    $sql="insert into $table($rows) values($value)";
    $pdo->exec($sql);
}



?>