<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>HAVEN-SIGNUP</title>
        <meta charset="utf-8">
        <meta name="description" content="haven">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
    <div class="form-Container">
    <header>Sign Up</header>
    <form action="welcomeSignup.php" method="post">
        <label>First Name</label><br><br>
        <input type="text" name="fname" placeholder="Enter First Name" required class="inputs" id="firstname"><br><br>
        <label>Last Name</label><br><br>
        <input type="text" name="lname" placeholder="Enter Last Name" required class="inputs"><br><br>
        <label>email</label><br><br>
        <input type="email" name="email" placeholder="example@gmail.com" required class="inputs" id="email"><br><br>
        <label>password</label><br><br>
        <input type="PASSWORD" name="password" placeholder="*********" required class="inputs"><br><br>
        <label>repeat password</label><br><br>
        <input type="PASSWORD" name="rpassword" placeholder="*********" required class="inputs"><br><br>
        <div class="checkbox-and-forgotpassword">
            <div>
                
                <input type="checkbox" name="rememberMe"><label id="checkboxLabel">remember me</label>
            </div>
            <div class="forgotpassword">
                <a href="#">forgot password<a>
            </div>
        </div>
        <div class="container-for-submitbutton-and-loginbuton">
            <div>
                <input type="submit" name="Create Account" value="sign up" class="sign-up">
            </div>
        </div>
    </form>
    <div class="container-for-login-images">
            <ul>
                <li><a href="https://www.facebook.com"><img src="images/facebook.jpg" alt="facebook" class="logo"></a></li>
                <li><a href="https://www.google.com"><img src="images/google+.jpg" alt="google+" class="logo"></a></li>
                <li><a href="https://www.twitter.com"><img src="images/twitter.jpg" alt="twitter" class="logo"></a></li>
            </ul>
        </div>
        <h4>have an account?<span><a href="#" class="h4">log in here</span></a></h4>  
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