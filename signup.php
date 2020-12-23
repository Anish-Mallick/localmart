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
        $fullName = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fullAddress = $_POST['address'];
        $contactNo = $_POST['contact'];
        
        
        
        
        
        $connection = mysqli_connect('sql203.epizy.com', 'epiz_27346550', '9Z6aOXXd4C', 'epiz_27346550_localmart');
        
            if(!$connection){
                die("Database connection failed.");
            } 
        
        $query = "INSERT INTO user_login(Full_Name, Email, Password, Full_Address, Contact_Number) ";
        $query .= "VALUES ('$fullName', '$email', '$password', '$fullAddress',  '$contactNo')";
        
       $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query FAILED' . mysqli_error());
        }
            else {
				
                header("Location: http://localhost/LocalMArt/login.php");
				echo "Your Request Submitted. Thank You!!";
			}
        
    }
    
    
    ?>
	
  
  
    <div class="wrapper">
      <div class="title">
Customer Signup </div>
<form action="signup.php" method="post">
  <div class="field">
    <input type="text" name="fullname" required>
    <label>Full Name</label>
  </div>
  <div class="field">
      <input type="email"  name="email" required>
      <label>Email Address</label>
    </div>
  <div class="field">
      <input type="password" name="password" required>
      <label>Password</label>
    </div>
  <div class="field">
      <input type="text" name="address" required>
      <label>Full Address</label>
  </div>
  <div class="field">
    <input type="tel" name="contact" required>
    <label>Contact Number</label>
</div>
  

<div class="field">
          <input type="submit" value="Signup" name="submit">
        </div>
<div class="signup-link">
Already have account? <a href="login.php">Customer Login</a>

</form>
</div>
</body>
</html>
