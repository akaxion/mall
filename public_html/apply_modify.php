<?
	include 'config.php';
	include 'util.php';
	
	$conn = dbconnect($host, $dbid, $dbpass, $dbname);
	$apply_no = $_POST['apply_no'];
	$apply_date = $_POST['apply_date'];
	$company_name = $_POST['company_name'];
	$company_hp = $_POST['company_hp'];
	$trading_name = $_POST['trading_name'];
	$trading_address = $_POST['trading_address'];
	$trading_hp = $_POST['trading_hp'];
	
	mysqli_query($conn, "set autocommit = 0");
	mysqli_query($conn, "set session transaction isolation level serializable");
	mysqli_query($conn, "begin");
	
	$ret = mysqli_query($conn, "update apply set apply_no = '$apply_no', 
	apply_date = '$apply_date', company_name = '$company_nmae' , 
	company_hp = '$company_hp', trading_name = '$trading_name',
	trading_address = '$trading_address', trading_hp = '$trading_hp'
	where apply_no = $apply_no");
	
	if(!$ret){
		mysqli_query($conn, "back");
		alert_message('Query Error: '.mysqli_error($conn));
	}
	else{
		mysqli_query($conn, "commit");
		simple_message('정보가 성공적으로 수정 되었습니다.');
		echo "<meta http-equiv='refresh' content = '0; url=app_detail.php?apply_no=$apply_no'>";
	}
	?>
	<?
	include 'footer.php';
	?>
	