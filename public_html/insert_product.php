<?php
include "config.php";
include "util.php";

$conncet = dbconnect($host, $dbid, $dbpass, $dbname);

$p_country = $_POST['p_country'];
$p_name = $_POST['p_name'];
$p_dec = $_POST['p_dec'];
$p_size = $_POST['p_size'];
$p_color = $_POST['p_color'];
$p_price = $_POST['p_price'];
$category = $_POST['category'];

$pathimg = "/home/db2019/2015410147/public_html";
$p_image = $pathimg.basename($_FILES['p_image']['name']);
$p_imagename = basename($_FILES['p_image']['name']);

if(move_uploaded_file($_FILES['p_image']['tmp_name'], $p_image)){
	$ret = mysql_query("insert into product(country, item_name, item_describe,
	size, color, image, price, category) values ('$p_coutry', '$p_name', 
	'$p_dec', '$p_size', '$p_color', '$p_imagename', '$p_price', 
	'$category')", $connect);
	
	if(!$ret)
	{
		msg('DB에 에러 발생');
	}
	else
	{
		s_msg('성공적으로 입력 되었습니다');
		echo "<meta http-equiv = 'refresh' content = '0;url= input_product.php'>";
	}
}
else{
	msg('파일 업로드 실패!');
}
?>