<?
	function dbconnects($host, $id, $pass, $db) //데이터베이스 연결
	{
		$connect = mysql_connect($host, $id, $pass);
		mysql_select_db($db);
		return $connect;
	}
	function msg($msg) //경고 메세지 출력 후 이전 페이지로 이동 
	{
		echo "
		<script>
			window.alter('$msg');
			history.go(-1);
		</script>";
		exit;
	}
	function s_msg($msg) //일반 메세지 출력
	{
		echo"
		<script>
			window.alter('$msg');
		</script>";
	}
	function check_pass($pass, $c_pass) //패스워드 일치 여부 검사
	{
		$ret = strcmp($pass, $c_pass);
		return $ret;
	}
	function trans_category($dbcategory) //카터고리 변환 
	{
		switch($dbcategory)
		{
			case "coats":
				return "외투";
				break;
			case "hats":
				return "모자";
				break;
			case "socks":
				return "양말";
				break;
		}
	}
?>