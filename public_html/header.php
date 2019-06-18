<html>
	<center>
	<head>
	<meta name = "viewport" content = "width=device-width, initial-scale = 1">
	<style>
			head{
				font-family: 'Comic Sans MS', cursive, sans-serif;
			}
			*{
				box-sizing: border-box;
			}
			.mySlides{
				
			}
			html, body{
				height: 100%;
				width: 100%;
			}
			body{
				font-family: 'Comic Sans MS', cursive, sans-serif;
				background-color: lightskyblue;
		
			}
			ul{
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #333;
				border-radius: 20px;
			}
			li a, .dropbtn{
				display: inline-block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}
			li{
				float: left;
			}
			.dropdown:hover .dropbtn{
				background-color: pink;
			}
			li.dropdown{
				display: inline-block;
			}
			.dropdown-content{
				display: none;
				position: absolute;
				background-color: white;
				min-width:160px;
				box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
				z-index: 1;
			}
			.dropdown-content a{
				color: black;
				padding: 12px; 16px;
				text-decoration: none;
				display: block;
				text-align: center;
			}
			.dropdown-content a:hover{
				background-color:orange;
			}
			.dropdown:hover .dropdown-content{
				display:block;
			}
			img.ss{
				position: absolute;
				left: 80px;
				top: 300px;
			}
			img.sa{
				position: absolute;
				right: 80px;
				top: 300px;
			}
			input[type=text]{
				width:100px;
				box-sizing: border-box;
				border: 2px solid #ccc;
				border-radius: 4px;
				font-size: 16px;
				background-color: white;
				background-position: 10px 10px;
				padding: 12px 14px 12px 20px;
				-webkt-transition: width 0.4s ease-in-out;
				transition: width 0.4s ease-in-out;
			}
			input[type=text]:focus{
				width: 50%;
			}
			.flexbox{
				position: absolute;
				right: 100px;
				top: 109px;
				text-align: center;
			}
			.scene{
				background:none;
				box-shadow: none;
				-moz-box-shadow: none;
				-o-box-shadow:none;
				border: none;
			}
			.card{
				position:static;
				transition: transform 0.5s;
				transform-style: preserve-3d;
				display: inline;
			}
			.scene: hover .card{
				transform: rotateY(180deg);
			}
			.slideshow-container{
				max-width:800px;
				position:relative;
				margin:auto;
			}
			.prev, .next{
				cursor: pointer;
				position: relative;
				top: 50%;
				width: auto;
				padding: 16px;
				margin-top: -22px;
				color: white;
				font-weight: bold;
				font-size: 18px;
				transition: 0.6s ease;
				border-radius: 0 3px 3px 0;
				user-select: none;
			}
			.next{
				right:0;
				border-radius:3px 0 0 3px;
			}
			.prev:hover .next:hover{
				background-color: rgba(0, 0, 0, 0.8);
			}
			img.sg{
				vertical-align: middle;
				width: 500px;
				height: 300px;
				display: block;
			}
			.text{
				color: #f2f2f2;
				font-size: 12px;
				padding: 8px 12px;
				position:absolute;
				bottom: 8px;
				width:100%;
				text-align: center;
			}
			.numbertext{
				color: #f2f2f2;
				font-size: 12px;
				padding: 8px 12px;
				position: absolute;
				top: 0;
			}
			.dot{
				cursor: pointer;
				height: 15px;
				width: 15px;
				margin: 0 2px;
				background-color: #bbb;
				border-radius:50%;
				display: inline-block;
				transition: background-color 0.6s ease;
			}
			.active, .dot:hover{
				background-color: #717171;
			}
			.fade{
				-webkit-animation-name:fade;
				-webkit-animation-duration: 1.5s
				animation-name: fade;
				animation-duration:1.5s;
			}
			@-webkit-keyframes fade{
				from{
					opacity:.4;
				}
				to{
					opacity:1;
				}
			}
			@keyframe fade{
				from{
					opacity: .4;
				}
				to{
					opacity: 1;
				}
			}
			@media only screen and (max-width: 300px){
				.prev, .next, .text{font-size: 11px;}
			}
		</style>
		<center>
			<link rel = "stylesheet" href "style.css"/>
		</center>
		<script>
			var myVar = setInterval(myTimer, 1000);
			function myTimer(){
				var d = new Date();
				document.getElementById("demo").innerHTML = d.toLocaleTimeString();
			}
		</script>
		</head>
		<body>
			<div id = "logo">
				<a href = "index.php"><img src = "shark4.png" alt = "shark" height = "180" width = "200" 
				align = "top-right"></a>
			</div>
			<div id = "quot">
				<div class = "marg">
					<a href = "index.php"><img src = "shark3.png" alt = "shark" height = "150" width = "170" 
					class = "ss" ></a>
					<a href = "index.php"><img src = "shark5.png" alt = "shark" height = "160" width = "170" 
					class = "sa" ></a>
				</div>
			</div>
			<ul>
					<li class = "dropdown"><a href = "product_list.php" class = "dropbtn">상품목록</a>
						<ul class = "dropdown-content">
							<li><a href = "t_shirt.php">티셔츠</a></li>
							<li><a href = "hat.php">모자</a></li>
							<li><a href = "shoes.php">신발</a></li>
						</ul></li>
					<li class = "menu-item"><a href = "order_list.php"> 주문목록 </a></li>
					<li class = "menu-item"><a href = "input_product.php"> 상품등록 </a></li>
					<li class = "menu-item"><a href = "login.php">로그인</a></li>
			</ul>
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
				<form class="flexbox" autocomplete = "off">
					<div class = "search" name = "search_form" method = "post" onsubmit="return search_value_check()" action = 'product_list.php'>
						<h2>
							<input name = "search" type="text" placeholder = "Search..." required/>
							<button class = "scene" type = "submit" value = "submit">
								<img class = "card" src = "shark11.png" alt= "shark" height = "90" width = "80" class = "sb">
								</button>
						</h2>
					</div>
				</form>
			</div>
			<div id = "content">