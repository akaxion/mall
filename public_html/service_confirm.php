<?
	include 'config.php';
	include 'util.php';
	
	$conn = dbconncet($host, $dbid, $dbpass, $dbname);
	
	$service_no = $_POST['service_no'];
	$service_id = $_POST['service_id'];
	$service_reason = $_POST['service_reason'];
	
	mysql_query($conn, "set autocommit = 0");
	mysql_query($conn, "set session transaction isolation level serializable");
	mysql_query($conn, "begin");
	
	$ret = mysqli_query($conn, "insert into service set service_id = '$service_id',
			service_no = '$service_no', service_reason = '$service_reason'");
			
	if(!$ret){
		mysqli_query($conn, "back");
		alert_message('Query Error: '.mysqli_error($conn));
	}
		
	else{
		$id = mysqli_insert_id($conn);
		mysqli_query($conn, "commit");
		simple_message('성공적으로 입력 되었습니다');
		echo "<meta http-equiv='refresh' content = '0; url = detail_reason.php?
				service_id =$service_id'>";
	}
	?>
	
	<?
	include 'footer.php';
	?>