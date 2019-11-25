<?php
/**
 * 1.建立資料庫及資料表來儲存檔案資訊
 * 2.建立上傳表單頁面
 * 3.取得檔案資訊並寫入資料表
 * 4.製作檔案管理功能頁面
 */
include "../api/base.php";
if(!empty($_FILES) && $_FILES['file']['error']==0){
    $note=$_POST['note'];
    $type=$_FILES['file']['type'];
    $filename=$_FILES['file']['name'];
    $path="../upload/" . $filename;
    $thmbPath="../thmb/s_" . $filename;
    
    move_uploaded_file($_FILES['file']['tmp_name'] , $path);
    $sql="insert into files (`name`,`type`,`path`,`note`,`thmb`) values('$filename','$type','$path','$note','$thmbPath')";
    $result=$pdo->exec($sql);
    if($result==1){
        echo "上傳成功";
    }else{
        echo "DB有誤";
    }
}
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">履歷相片管理</p>
	<form method="post" target="back" action="?do=tii">
		<table width="100%">
			<tbody>
				<tr class="yel">
					<td width="45%">網站標題</td>
					<td width="23%">替代文字</td>
					<td width="7%">顯示</td>
					<td width="7%">刪除</td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					
					
				<form action="pic.php" method="post" enctype="multipart/form-data">
				  檔案：<input type="file" name="file" ><br><br>
  					說明：<input type="text" name="notes" ><br>
  				<input type="submit" value="上傳">
				</form>
					
					
					
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>