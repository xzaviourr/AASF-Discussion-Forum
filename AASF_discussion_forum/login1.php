
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="login.js"></script>
	<title>login page</title>
	<!--<link rel="stylesheet" type="text/css" href="login.css">-->
	<style>
	body{
		padding:0px;
		margin:0px;
		background: url("blueberry.jpg");
		background-size: cover;
		font-family: sans-serif;
	}
	.loginbox{
		width: 320px;
		height: 380px;
		background: #002233;
		color:#fff;
		position: absolute;
		left:39%;
		top:22%;

		box-sizing: border-box;
		padding: 30px 70px;
		border-radius:18px;
	}
	#culture3{
		width: 90px;
		height: 80px;
		border-radius: 50%;
		position: absolute;
		top:-50px;
		left:35%;
	}
	h1{
		margin: 0;
		padding: 0;
		font-weight: bold;
	}
	.loginbox p{
		margin: 0;
		padding: 0;
		font-weight: italic;
	}
	.loginbox input{
		width: 100%;
		margin-bottom: 20px;
	}
	.loginbox input[type="text"],input[type="password"]
	{
		border:none;
		height: 25px;
		border-radius: 15px;
		border-bottom: 1px solid #fff;
	}
	.loginbox input[type="submit"]{
		border:none;
		outline: none;
		height: 40px;
		background: #fff;
		font-size:18px;
        border-radius: 18px;
	}
	.loginbox input[type="submit"]:hover{
     cursor:pointer;
     background: #1a75ff;
     color:#000;
	}
</style>
</head>
<body>
	<div class="loginbox">
		<img src="culture3.jpg" id="culture3" top="250px" left="510">
		<h1>Login Here</h1>
		<form name="myform" method="post" action="login.php">
			
			<p>Username</p>
			<input type="text" name="username" id="username" placeholder=" Enter Username" required>
			<p>Password</p>
			<input type="Password" name="password" id="password" placeholder=" Enter Password" required><br>
			<input type="submit" name="submit" id="submit" value="Login" onclick="validate()">
	    </form>    
	</div>
</body>
</html>                                                        