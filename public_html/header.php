<html>
	<center>
	<head>
		<style>
			body{background-color: LightSkyBlue;
				border: 5px solid olive;
				margin: 20px;
				text-align: center;
			}
			h1{color: black;}
			p{color:red;}
			h2{color: black;}
		</style>
		<center>
			<title>구멍난 양말</title>
			<link rel = "stylesheet" href "style.css"/>
		</center>
		<body>
			<div id = "logo">
				<a href = "index.php"><img src = "logo.gif" alt = "Logo"</a>
			</div>
			<div id = "quot">
				<div class = "marg">
					구멍난 양말
				</div>
			</div>
			<div id = "menu">
				<div class = "margMenu">
					<a href = "product_list.php"></a>상품목록</a>
					<a href = "order_list.php"> 주문목록</a>
					<?php
						if(!$_COOKIE[cookie_id] || !$_COOKIE[cookie_name])
						{
							echo "<a href='login.php'>로그인</a>";
						}
						else
						{
							if($_COOKIE[cookie_admin] == 0)
							{
								echo "<a href = 'logout.php'> $_COOKIE[cookie_name] 로그아웃</a>";
							}
							else 
							{
								echo "<a href = 'input_product.php'>상품입력</a>";
								echo "<a href = 'logout_php'> 관리자 로그아웃</a>";
							}
						}
					?>
				</div>
			</div>
			<div id = "leftBar">
				<script>
					function search_value_check()
					{
						var form = document.search_form;
						if(!form.search_word.value){
							alter("검색어를 입력해보세요!");
							form.search_word.focus();
							return false;
						}
						else{
							return true;
						}
					}
				</script>
				<div class="marg">
					<form name = "search_form" method = "post" onsubmit="return search_value_check()" action = 'product_list.php'>
						<h2>상품검색:
							<input name = "search_word" type="text" size="20" maxlength="50" placeholder = "찾으시는 상품이 있으신가요?"/>
							<input type = "submit" name = "button" id = "button" value = "검색"/>
						</h2>
					</form>
				</div>
			</div>
			<div id = "content">