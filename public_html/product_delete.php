<?php
	include "config.php";
	include "util.php";
	
	$conn = dbconnect($host, $dbid, $dbpass, $dbname);
	$clothes_no = $_GET['clothes_no'];
	
	mysqli_query($conn, "set autocommit = 0");
	mysqli_query($conn, "set session transacation isolation level serializable");
	mysqli_query($conn, "begin");
	
	$ret = mysqli_query($conn, "Delete from clothes where clothes_no = $clothes_no");
	
	if(!$ret)
	{
		mysqli_query($conn, "back");
		alert_message('Query Error: '.mysqli_error($conn));
	}
	else
	{
		mysqli_query($conn, "commit");
		simple_message('정보가 성공적으로 삭제 되었습니다');
		echo "<meta = http-equiv = 'refresh' content ='0;url = product_list.php'>";
	}
	?>
	<?
	include 'footer.php';
	?>