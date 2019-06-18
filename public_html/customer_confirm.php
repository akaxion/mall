<?
	include 'config.php';
	include 'util.php';
	
	$conn = dbconnect($host, $dbid, $dbpass, $dbname);
	$customer_no = $_POST['customer_no'];
	$customer_name = $_POST['customer_name'];
	$customer_nickname = $_POST['customer_nickname'];
	$customer_hp = $_POST['customer_hp'];
	$customer_address = $_POST['customer_address'];
	$added_date = $_POST['added_date'];
	$customer_pw = $_POST['customer_pw'];
	$customer_id = $_POST['customer_id'];
	
	mysqli_query($conn, "set autocommit = 0");
	mysqli_query($conn, "set session transaction isolation level serializable");
	mysqli_query($conn, "begin");
	
	$ret = mysqli_query($conn, "insert into customer set customer_name = '$customer_name',
			customer_nickname = '$customer_nickname', 
			customer_hp = '$customer_hp', customer_address = '$customer_address',
			customer_no = '$customer_no', added_date = NOW()");
			
	if(!$ret)
	{
		mysqli_query($conn, "back");
		alert_message('Query Error: '.mysqli_error($conn));
	}
	else{
		mysqli_query($conn, "commit");
		simple_message('성공적으로 입력 되었습니다');
		echo"<meta http-equiv='refresh' content='0;url=customer_list.php'>";
	}
	?>
	<?
	include 'footer.php';
	?>