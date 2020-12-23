<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Anish Mallick">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Staatliches" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main-slider.css">
    <link rel="stylesheet" href="css/category.css">
    <link rel="stylesheet" href="css/shared.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">
    <title>LocaMart | Shop at Home</title>
</head>
<body>



<header>
     <div id="main-header" class="main">
           <div class="main-heading">
            
            <h1><a href="main-homepage.html" class="main-heading__brand"><span class="primary-black">Local</span><span class="primary-red">MArt</span></a></h1>
        </div>
        
        <div class="main-nav">
           <a href="main-homepage.html" class="nav primary-red">Home</a> 
           <a href="main-homepage.html" class="nav  primary-red"> Shop Now</a>
            <a href="#contact" class="nav  primary-red"> ContactUs</a>
            <a href="login.php" class="nav primary-red">Login</a>
        </div>
        
    </div>
    
</header>


<?php

    if(isset($_POST['submit'])) {
        $fullName = $_POST['fullname'];
        $email = $_POST['email'];
        $contactNo = $_POST['contact'];
        $yourShop = $_POST['your-shop'];
        $shoppingList = $_POST['shopping-list'];
        $fullAddress = $_POST['address'];
        
        
        
        
        
        
        $connection =mysqli_connect('localhost', 'root', '', 'localmart');
        
            if(!$connection){
                die("Database connection failed.");
            } 
        
        $query = "INSERT INTO order_requests(Full_Name, Email, Contact_No, Your_Shop, Shopping_List, Full_Address) ";
        $query .= "VALUES ('$fullName', '$email', '$contactNo', '$yourShop', '$shoppingList', '$fullAddress')";
        
       $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query FAILED' . mysqli_error());
        }
            else {  ?><br><br><br><br><?php
				echo "Your order has been placed. Thank You!!";
			}
        
    }
    
    
    ?>





<section id="contact-form" class="py-3">
    <div class="container">
        <h1 class="l-heading text-primary">Place Your Order</h1>
        <p>Please fill out the below details</p>
        <form action="order.php" method="post">
          <div class="form-group">
            <label for="name">Full Name <span class="asterisk">*</span></label> 
             <input type="text" name="fullname" id="name" required>
            </div>
            <div class="form-group">
            <label for="email">Email <span class="asterisk">*</span></label>
             <input type="email" name="email" id="email" required>
            </div>
             <div class="form-group">
            <label for="mobile-number">Contact No. <span class="asterisk">*</span></label>
             <input type="tel" name="contact" id="mobile-number" required>
            </div>
            <div class="form-group">
            <label for="options">Select your Shop <span class="asterisk">*</span></label>
             <select style="width:50%;" name="your-shop" required>
                 <option>Amir general store</option>
                 <option>Prashant groceries store</option>
                 <option>Anish Electronics</option>
             </select>
            </div>
            <div class="form-group">
            <label for="message">Enter your full shopping list.. <span class="asterisk">*</span></label>
            <textarea type="text" name="shopping-list" id="message" required></textarea>
            </div>
            <div class="form-group">
            <label for="address">Full Address. <span class="asterisk">*</span></label>
             <input type="text" name="address" id="address" required>
            </div>
             <div>
               <p>I Agree the Term & Conditions.</p>
             </div>
             
            <input type="submit" class="order-btn" name="submit" value="Proceed">
            <div style="padding-top: 1rem;">
            <input  type="reset" class="order-reset-btn" name="reset" value="Reset">
        </div>
        </form>
       </div>
    </section>




<footer id="contact">
    <div class="footer-primary">
        <div>
            <h5 class="medium-gray">ABOUT</h5>
            <ul>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="login.php">SignUp/Login</a></li>
                <li><a href="#contact">Localmart Services</a></li>
                
            </ul>
        </div>
        
        
        <div>
            <h5 class="medium-gray">SOCIAL</h5>
            <ul>
            <li><a href="aboutus.html">Facebook</a><li>
                <li><a href="aboutus.html">Twitter</a></li>
                <li><a href="aboutus.html">Youtube</a></li>
                <li><a href="aboutus.html">Instagram</a></li>
            </ul>
        </div>
        <div>
            <h5 class="medium-gray">Mail Us:</h5>
                <p style=color:#fff;>LocalMart Shopping Service,<br>Adarshnagar,<br>Patana, Bihar India</p>
        </div>
        <div>
            <h5 class="medium-gray">Contact Us:</h5>
                <p style=color:#fff;>Email: localmart@gmail.com<br>Mobile No. +91 9470290584</p>
        </div>
    </div>
    <div class="footer-secondary">
        <p style="color:red; font-size: larger;">&copy; 2019-2020 Localmart.com</p>
    </div>
</footer>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>
<script src="shared.js"></script>
</body>
</html>