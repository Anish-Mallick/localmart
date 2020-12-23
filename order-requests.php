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
    
    if(isset($_POST['login'])) {
        $userName = $_POST['username'];
        $password = $_POST['password'];
       
        if($userName == 'localmart' && $password == 'localmart'){
            
        $connection = mysqli_connect('sql203.epizy.com', 'epiz_27346550', '9Z6aOXXd4C', 'epiz_27346550_localmart');
        
            if(!$connection){
                die("Database connection failed.");
            } 
        
       
        $query = "SELECT * FROM order_requests";
        
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("Query Failed" . mysqli_error());
        }
        ?>
         <br><br><br><br><br>
         <table>
                <thead>
                  <tr>
                   <th>Id</th>
                   <th>Full_Name</th>
                   <th>Email</th>
                   <th>Contact_No</th>
                   <th>Request</th>
                   <th>Detail_Description</th>
                   <th>Full_Address</th>
                  </tr>
                </thead>
                <tbody>
        
         
          <?php
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['ID'];
                $fullName = $row['Full_Name'];
                $email = $row['Email'];
                $contactNo = $row['Contact_No'];
                $yourShop = $row['Your_Shop'];
                $shoppingList = $row['Shopping_List'];
                $address = $row['Full_Address'];
               
            
                    echo "<tr><td>{$id}</td>
                    <td>{$fullName}</td>
                    <td>{$email}</td>
                    <td>{$contactNo}</td>
                    <td>{$yourShop}</td>
                    <td>{$shoppingList}</td>
                    <td>{$address}</td>
                    </tr>";
            }
                    ?>
                      
                </tbody>    
                 </table>    
        
            <?php
    
        }
           else{ ?> <br><br><br><br><br> <?php
            echo "Invalid User!";
        } 
    }
        
       ?>


<section id="contact-form" class="py-3">
    <div class="container">
        <h1 class="l-heading">Your Dashboard</h1>
        <p>Enter your Login crediantials.</p>
        <form action="order-requests.php" method="post">
          <div class="form-group">
            <label for="name">UserName</label>
             <input type="text" name="username" id="name"
             placeholder="Enter UserName">
            </div>
            <div class="form-group">
            <label for="password">Password</label>
             <input type="password" name="password" id="password" placeholder="Enter Password">
            </div>
             
            
            <input style="background: red; " type="submit" class="btn" name="login" value="Login">
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