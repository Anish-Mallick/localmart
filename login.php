<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Login Form Design | CodeLab</title> -->
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body>


<?php

    if(isset($_POST['submit'])) {
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        
        
        
        
        
        $connection = mysqli_connect('localhost', 'root', '', 'localmart');
        
            if(!$connection){
                die("Database connection failed.");
            } 
        
        $query = "SELECT * FROM user_login WHERE Email='$email' AND Password='$password'";
        
        
       $result = mysqli_query($connection, $query);
	   $count = mysqli_num_rows($result);
        if(!$result) {
            die('Query FAILED' . mysqli_error());
        }
            else {
				if($count>0){
					header("Location: http://localhost/LocalMArt/main-homepage.html");
				}
				else{
					echo "Invalid User";
				}
                
			}
        
    }
    
    
    ?>











    <div class="wrapper">
      <div class="title">
Customer Login </div>
<form action="login.php" method="post">
        <div class="field">
          <input type="email" name="email" required>
          <label>Email Address</label>
        </div>
        <div class="field">
                  <input type="password" name="password" required>
                  <label>Password</label>
                </div>
        <div class="content">
                  <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                  </div>
          <div class="pass-link">
          <a href="signup.php">Forgot password?</a></div>
          </div>
          <div class="field">
                    <input type="submit" value="Login" name="submit">
                  </div>
          <div class="signup-link">
          Not a member? <a href="signup.php">Signup now</a></div>
</form>
</div>
</body>
</html>
