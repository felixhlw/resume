<?php
/* include "./api/base.php"; */
$dsn="mysql:host=localhost;charset=utf8;dbname=resume";
$pdo=new PDO($dsn,"root","");
/* $sql= "select * from info where id='".$i."'"; */
$sql= "select * from info";
$user=$pdo->query($sql)->fetch(); 

if (!empty($_POST) && !empty($_FILES)  ) {
	/* if (!empty($_FILES) && $_FILES['file']['error']==0 ) { */
	
		$pictype=$_FILES['pic']['type'];
		$picname=md5(time().$_FILES['pic']['name']);
		switch($_FILES['pic']['type']){
			case "image/jpeg":
				$subname=".jpg";
			break;
			case "image/png":
				$subname=".png";
			break;
			case "image/gif":
				$subname=".gif";
			break;
			default:
				$subname=".others";
		}
		$picpath="pic/".$picname.$subname;    
		$id=$_POST['id'];
		$name=$_POST['name'];
		$intro=$_POST['intro'];
		$jobs=$_POST['jobs'];
		$birthday=$_POST['birthday'];
		$addr=$_POST['addr'];
		$email=$_POST['email'];
		$tel=$_POST['tel'];
		move_uploaded_file($_FILES['pic']['tmp_name'] , $picpath);
		console.log($picpath);
		
		//刪原有檔案
		$sql3="select * from info where id='$id'";
		$origin=$pdo->query($sql3)->fetch();
		$origin_file=$origin['picpath'];
		unlink($origin_file);  // --> delete電腦中的檔案
	
	
		//更新資料
		$sql2="update info set picname='$picname', pictype='$pictype', picpath='$picpath', name='$name', intro='$intro', jobs='$jobs', birthday='$birthday', addr='$addr', email='$email', tel='$tel' where id='$id'" ;
	
		$result=$pdo->exec($sql2);
		if ($result==1) {
			echo "資料上傳成功";
			header("location:?do=info");
		}else{
			echo"DB有誤";
		}
	}
?>

<div style="margin:auto;">
	<p class="t cent botli">個人資料管理</p>
	



				<div class="private">
      <!--請自行設計個人資料的呈現方式並從資料庫取得會員資料-->

  

      <form action="/resume/admin/info.php" method="post"> 
        <table class="wrapper" >
          <tr>
            <td>ID</td>
            <td><?=$user['id'];?></td>
          </tr>
          <tr>
            <td>帳號</td>
            <td><?=$user['acc'];?></td>
          </tr>
          <tr>
            <td>密碼</td>
            <td><?=$user['pw'];?></td>
		  </tr>
          <tr>
			<td>相片</td>
			<img src="<?=$user['picpath'];?>" style="width:200px;height:auto">
            <td><input type="file" name="pic" id="pic" value="<?=$user['picname'];?>"></td>
          </tr>		  
          <tr>
            <td>姓名</td>
            <td><input type="text" name="name" id="name" value="<?=$user['name'];?>"></td>
		  </tr>
		  <tr>
            <td>簡介</td>
            <td><textarea name="intro" id="inro" cols="30" rows="10"><?=$user['intro'];?></textarea>
            </td>
		  </tr>
		  <tr>
            <td>職務</td>
            <td><textarea name="jobs" id="jobs" cols="30" rows="10"><?=$user['jobs'];?></textarea>
            </td>
          </tr>
          <tr>
            <td>生日</td>
            <td><input type="date" name="birthday" id="birthday" value="<?=$user['birthday'];?>"></td>
          </tr>
          <tr>
            <td>email</td>
            <td><input type="text" name="email" id="email" value="<?=$user['email'];?>"></td>
          </tr>
          <tr>
            <td>地址</td>
            <td><input type="text" name="addr" id="addr" value="<?=$user['addr'];?>"></td>
          </tr>
          <tr>
            <td>電話</td>
            <td><input type="text" name="tel" id="tel" value="<?=$user['tel'];?>"></td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="submit" value="送出編輯">
            </td>
          </tr>
            <input type="hidden" name="id" value="<?=$user['id'];?>">
        </table>
      </form>
      <br>
    </div>




</div>