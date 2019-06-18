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