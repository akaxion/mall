<? include ("header.php");

	if (isset($_POST['submit'])){
	var_dump($_POST);}?>
	<div class = "marg">
		<form enctype = "multipart/form-data" name = "form" action = "product_insert.php" method = "post">
		<table width = "433" border = "1">
			<tr><th width = "100" scope = "row">제품명</th>
			<td width = "317"><input type = "text" name = "p_name"/></td></tr>
			<tr><th width = "100" scope = "row">제조국</th>
			<td width = "317"><input type = "text" name = "p_country"/></td></tr>
			<tr><th scope = "row">제품설명</th>
			<td><textarea name = "p_dec"></textarea></td></tr>
			<tr><th scope = "row">사이즈</th>
			<td><input type = "text" name = "p_size"/></td></tr>
			<tr><th scope = "row">색상</th>
			<td><input type = "text" name = "p_color"></td></tr>
			<tr><th scope = "row">이미지</th>
			<td><input type = "hidden" name = "MAX_FILE_SIZE" value = "154242213"/>
			<input type = "file" name = "p_image"/></td></tr>
			<tr><th scope = "row">가격</th>
			<td><input type = "text" name = "p_price"/></td></tr>
			<tr><th scope = "row">종류</th>
			<td><select name = "category">
				<option value = "hats">모자</option>
				<option value = "tshirts">티셔츠</option>
				<option value = "socks">양말</option>
			</select></td></tr>
		</table>
		<div align = "center">
			<input type = "submit" name = "send" value = "입력하기"/>
		</div>
		</form>
	</div>
<? include ("footer.php")?>