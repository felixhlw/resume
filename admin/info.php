<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">動態文字廣告管理</p>
	<form method="post" target="back" action="?do=tii">
		<table width="100%">
			<tbody>
				<tr class="yel">
					<td width="80%">個人資料</td>
					<td width="10%">顯示</td>
					<td width="10%">刪除</td>
				</tr>
		<?php 
		for($i=0;$i<5;$i++){
		?>
				<tr >
					<td width="80%"><?=$i;?>:<input type="text" name="" id=""></td>
					<td width="10%"><input type="checkbox" name="" id=""></td>
					<td width="10%"><input type="checkbox" name="" id=""></td>
				</tr>
		<?php
		}
		?>				
			</tbody>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<td width="200px"><input type="button"
							onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=title&#39;)"
							value="新增網站標題圖片"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>