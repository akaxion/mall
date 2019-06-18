<?
	include 'config.php';
	include 'util.php';
	$conn = dbconnect($host, $dbid, dbpass, $dbname);
	$clothes_no = $_POST['clothes_no'];
	$clothes_name = $_POST['clothes_name'];
	$clothes_type = $_POST['clothes_type'];
	$clothes_size = $_POST['clothes_size'];
	$clothes_color = $_POST['clohtes_color'];
	$clothes_material = $_POST['clothes_material'];
	$clothes_laundry = $_POST['clothes_laundry'];
	$clothes_year = $_POST['clothes_year'];
	$clothes_country = $_POST['clothes_country'];
	
	mysqli_query($conn, "set autocommit = 0");
	mysqli_query($conn, "set transation isolation level serializable");
	mysqli_query($conn, "begin");
	
	$query = "select clothes_name from clothes where clothes_name = '$clothes_name'";
	$res = mysqli_query($conn, $query);
	if(!$res){
		alert_message('Query Error:'.mysqli_error($conn));
	}
	$row = mysqli_fetch_array($res);
	if($row['clothes_name']!= clothes_name){
		$ret = mysqli_query($conn, "insert into clothes set clothes_name = \"$clothes_name\"");
		if(!$res){
			}
		else{
			mysqli_query($conn, "back");
			alert_message('Query Error:'.mysqli_error($conn));
		}
	}
	else{
	}
	$ret2 = mysqli_query($conn, "insert into clothes set clothes_type = \"$clothes_type\", 
			clothes_name = \"$clothes_name\", clothes_size = \"$clothes_size\", 
			clothes_color = \"$clothes_color\", clothes_material = \"$clothes_material\",
			clothes_laundry = \"$clothes_laundry\", clothes_year = \"$clothes_year\"
			clothes_country = \"$clothes_country\"");
	if(!$ret2){
		mysqli_query($conn, "back");
		alert_message('Query Error:'.mysqli_error($conn));
	}
	else{
		$clothes_no = mysqli_insert_id($conn);
		mysqli_query($conn, "commit");
		simple_message('정보가 성공적으로 입력 되었습니다!');
		echo "<meta http-equiv= 'refresh' content = '0; url = product_detail.php?
				clothes_no=$clothes_no'>";
	}
	?>
	<?
	include 'footer.php';
	?>
	
	
	
	
	
	
	
	
	
	
	
	