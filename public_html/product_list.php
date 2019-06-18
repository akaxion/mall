<? include "header.php"?>
<form name = 'form' method = 'post' action = 'buy_product.php'>
	<div class = "marg">
		<?php
		include "config.php"; //데이터베이스 연결 설정파일
		include "util.php"; //유틸 함수 
		$connect = dbconnect($host, $dbid, $dbpass, $dbname);
		$qurey = "";
		if(array_key_exists("search_word", $_POST)){
			$search_word = $_POST["search_word"];
			echo "검색어: $search_word";
			$query = "select * from product where item_name like '%$search_word%'";
		}
		else{
			$query = "select * from product";
		}
		?>
		<table width = "440" border "1">
			<tr>
				<td width = "20" scope = "col"></td>
				<td width = "22" scope = "col">No.</td>
				<td width = "100" scope = "col">제품이미지</td>
				<td width = "65" scope = "col">제품명</td>
				<td width = "58" scope = "col">가격</td>
				<td width = "70" scope = "col">제조국</td>
			</tr>
			<?php
			$ret = mysql_query($query, $connect);
			while($row = mysql_fetch_array($ret)){
				$category = trans_category($row[8]);
				echo "<tr>
				<td width = '20'><input type = 'checkbox' name = 'check[]' value = '$row[0]'/></td>
				<td width = '22'><a href = 'product_info.pho?id=$row[0]'>$row[0]</a></td>
				<td width = '100'><a href = 'product_info.php?id=$row[0]'>
					<img src = './$row[6]'width'100'height'90'/></a></td>
				<td width = '65'><a href = 'product_info.php?id=$row[0]'>$row[1]</a></td>
				<td width = '58'>$row[7]</a></td>
				</tr>";}
				?>
		</table>
		<input type = "submit" name = "button" value = "구입하기"/>
	</div>
</form>
<?include "footer.php"?>
