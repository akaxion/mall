<!DOCTYPE html>
<html>
	<div class = "marg">
		<center>
<head>
	<h1>회원가입</h1>
<meta charset="UTF-8">
<style>
body	{background-color: LightSkyblue;
	font-size:2em;
}
h1	{color: slateblue;}
p	{color: steelblue;}
</style>
<style>
a{
	text-decoration: none;
	display: inline-block;
	padding: 8px 16px;
}
a:hover{
	background-color: #ddd;
	color: black;
}
.previous{
	background-color: #f1f1f1;
	color: black;
}
.next{
	background-color: #4CAF50;
	color: white;
}
</style>
</head>
<body>
<style>
ol{
list-style:none;
}
</style>
<form name = "form" action= "join_insert.php" method="post">
	<div align = "center"><span class = "margMenu style1">[회원등록]</span></div>
<fieldset>
  <ol>
  	<li>
  		<label for ="id">ID</label>
  		<input id="id" type = "text"
  		placeholder="NO BLANK" autofocus required>
  	</li><br>
  	<li>
  		<label for ="password">PASSWORD</label>
  		<input passwd = "passwd" type = "password"
  		placeholder="NO BLANK" autofocus required>
  	</li><br>
  	<li>
  		<label for ="password">PASSWORD 확인</label>
  		<input passwd = "c_password" type = "password"
  		palceholder = "NO BLANK" autofocus required>
  	</li><br>
	<li>
	  <label for="first name">First name</label>
	  <input id="first name" type="text"
	  placeholder="NO BLANK" autofocus required>
	</li><br>
	<li>
	  <label for="middle name">Middle name</label>
	  <input id="middle name" type="text"
	   placeholder="BLANK ACCEPTED">
	</li><br>
	<li>
	  <label for="last name">Last name</label>
	  <input id="last name" type="text"
	  placeholder="NO BLANK" autofocus required>
	</li><br>
	<li>
	<input type="radio" name="gender" value="man">Male
	<input type="radio" name="gender" value="woman">Female
	</li><br>
	<li>
	<label for="birthday">Birthday</label>
	<input type="date" name="birthday">
	</li><br>
	<li>
	  <label for="email">E-mail</label>
	  <input id="email" type="email"
	  placeholder="example@domain.com" required>
	</li><br>
	<li>
	  <label for="phone">Telephone</label>
	  <input id="phone" name="phone"
	  placeholder="02)1111-1111" required>
	</li><br>
	<li>
	<label for ="Country">Country</label>
	<select name="country" size="1">
	<option value="PEOPLE'S REPUBLIC OF CHINA">MAINLAND</option>
	<option value="SOUTH KOREA">SOUTH KOREA</option>
	<option value="UNITED KINGDOM">UNITED KINGDOM</option>
	<option value="HONG KONG">HONGKONG</option>
	<option value="AUSTRALIA">AUSTRALIA</option>
	<option value="JAPAN">JAPAN</option>
	<option value="SINGAPORE">SINGAPORE</option>
	<option value="MALAYSIA">MALAYSIA</option>
	<option value="THAILAND">THAILAND</option>
	<option value="others1">Others</option>
      </select>
   </li><br>
   <li>
	<label for="city">City</label>
	<input id="city" type="text"
	  placeholder="NO BLANK" autofocus required>
   </li><br>
   <li>
   <div>
    <label for="image">Your Photo</label>
    <input type="file" id="image" name="image"
	placeholder="jpg, jpeg, png file only" required
          accept=".jpg, .jpeg, .png">
  </div>
  </li><br>
</ol>
<input type="submit" name = "send" value = "가입하기"/>
</fieldset>
</form>
</body>
</center>
</div>
</html>