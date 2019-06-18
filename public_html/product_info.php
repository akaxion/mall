<? include ("header.php")?>
<form name = 'form' method = 'post' action = 'buy_product.php'>
	<div class = 'marg'>
		<table width = "535">
<?php
	include "config.php";
	include "util.php";
	$id = $_GET['id'];
	$connect = dbconnect($host, $dbid, $dbpass, $dbname);
	$ret = mysql_query("select * from product where product_id=$id", $connect);
	while($row = mysql_fetch_array($ret)){
		$category = trans_category($row[8]);
		echo "<tr>
		<input type = 'hidden' name = 'check[]' value = '$row[0]' checked/>
		<th width = '80' scope = 'col'>이미지</th>
		<th width = '320' scope = 'col' align = 'center'>
		<img src = './$row[6]' width = '90' height = '90' /><th></tr>";
		echo "<tr>
		<th width = '80' scope = 'col'>제품명</th>
		<th width = '320' scope = 'col'>$row[1]</th></tr>";
		echo "<tr>
		<th width = '80' scope = 'col'>제품설명</th>
		<th width = '320' scope = 'col'>$row[2]</th></tr>";
		echo "<tr>
		<th width = '80' scope = 'col'>제조국</th>
		<th width = '320' scope = 'col'>$row[3]</th></tr>";
		echo "<tr>
		<th width = '80' scope = 'col'>사이즈</th>
		<th width = '320' scope = 'col'>$row[4]</th></tr>";
		echo "<tr>
		<th width = '80' scope = 'col'>색상</th>
		<th width = '320' scope = 'col'>$row[5]</th></tr>";
		echo "<tr>
		<th width = '80' scope = 'col'>가격</th>
		<th width = '320' scope = 'col'>$row[7]</th></tr>";
	}?>
		</table>
		<input type = "button" name = "buyBtn" value = "구입하기" onclick = "submit()"/>
		<input type = "button" name = "modifyBtn" value = "수정하기" onclick = "modify()"/>
	</div>
</form>
<srcipt>
	var form = document.search_form;
	funciton submit(){form.submit();
	}
	function modify(){
	form.action = 'modify_product.php?id=<?=$id?>'
	submit();
	}
</srcipt>
<? include ("footer.php")?>






