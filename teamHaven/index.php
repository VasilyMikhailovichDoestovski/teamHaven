<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="script/script.js"></script>
	<title>HAVEN</title>
	<meta charset="utf-8">
	<meta name="description" content="haven">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="form-Container">
			<img src="images/frame3.png"><br>
			<header>log in</header>
			<form action="#" method="post" id="form">
				<label>email</label><br><br>
				<input type="email" name="email" placeholder="Email/Username" required class="inputs" id="email"><br><br>
				<label>password</label><br><br>
				<input type="PASSWORD" name="password" placeholder="Password" required class="inputs" id="password"><br><br>
				<div class="checkbox-and-forgotpassword">
					<div>
						
						<input type="checkbox" name="rememberMe"><label id="checkboxLabel">remember me</label>
					</div>
					<div class="forgotpassword">
						<a href="#">forgot password<a>
					</div>
				</div>
				<div class="container-for-submitbutton-and-loginbutton">
					<div>
						<button type="submit" onclick="validator()">Login</button>
					</div>
					
				</div>
			</form>
			<div class="container-for-loginOption">
				<div id="hr2"><hr></div>
				<div id="alternateLoginOption">or login with</div>
				<div id="hr2"><hr></div>
			</div>
			<div class="container-for-login-images">
				<ul>
					<li><a href="https://www.facebook.com"><img src="images/facebook.jpg" alt="facebook" class="logo"></a></li>
					<li><a href="https://www.google.com"><img src="images/google+.jpg" alt="google+" class="logo"></a></li>
					<li><a href="https://www.twitter.com"><img src="images/twitter.jpg" alt="twitter" class="logo"></a></li>
				</ul>
			</div>
			<h4>Dont have an account?<span>&nbsp;<a href="#" class="h4">Register here</span></a></h4>
		</div>
		<div class="container-welcomeToHaven">
			<h1>welcome to haven</h1>
			<div>
				<img src="images/loginpage.png" alt="loginImage1" class="imagepng">
			</div>
		</div>
	</div>
</body>
</html>