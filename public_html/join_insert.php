<?php
include "config.php"; //데이터베이스 연결 설정 파일
include "util.php"; //유틸함수 

$connect = dbconnect($host, $dbid, $dbpass, $dbname);

$id = $_POST['txt_ID'];
$pass = $_POST['passwd'];
$c_pass = $_POST['c_passwd'];
$name = $_POST['txt_name'];
$phone = $_POST['txt_phone'];
$add = $_POST['txt_add'];

$ret = mysql_query("select member_id from member where member_id = '$id'", $connect);
//ID 조사
$num = mysql_num_rows($ret);

if($num)
{
	msg('이미 존재하는 회원ID입니다!');
}
else if(check_pass($pass, $c_pass)!= 0) //pass 조사 
{
	msg('패스워드가 정확하지 않습니다!');
}
else
{
	$insert_query = "insert into member(member_id, password, name, phone, address, admin) values 
	('$id', '$pass', '$name', '$phone', '$address', 0)";
	$insert_ret = mysql_query($insert_query, $connect);
	if(!insert_ret)
	{
		msg('DB에 에러가 발생!');
	}
	else
	{
		s_msg('가입되었습니다');
		echo "<meta http-equiv = 'refresh' content='0; url=login.php'>";
	}
}
mysql_close($connect);
?>