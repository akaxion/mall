<? include ("header.php")?>
<div class = "marg">
<form name = "form" action= "join_insert.php" method="post">
	<div align = "center"><span class = "margMenu style1">[회원등록]</span></div>
	<table with = "440" border = "1">
  	<tr><th width = "92" scope = "row">ID</th>
  	<td width = "332"><input type = "text" name = "txt_ID"/></td></tr>
  	<tr><th scope = "row">PASS</th>
  	<td><input type = "password" name = "passwd"/></td></tr>
  	<tr><th scope = "row">PASS 확인</th>
  	<td><input type = "password" name = "c_passwd"/></td></tr>
	<tr><th scope = "row">이름</th>
	<td><input type = "text" name ="txt_name"/></td></tr>
	<tr><th scope = "row">전화번호</th>
	<td><input type = "text" name = "txt_phone"/></td></tr>
	<tr><th scope = "row">주소</th>
	<td><textarea name = "txt_add" cols = "40"></textarea></td></tr>
   </table>
   <label>
<div align = "center">
<input type="submit" name = "send" value = "가입하기"/>
</div>
</label>
</form>
</div>
<? include ("footer.php")?>