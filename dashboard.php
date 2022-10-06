<?php
session_start();
 $username=$_GET['name'];
$userid=$_GET['userid'];
$_SESSION['username']=$username;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
    href="style_dash.css">

</head>
<body>
<?php
include "header.php";
   ?>
<main>
    <div class="content">
        
            
 <img src="adopt.jpg">
 <div class="text-display">
 <span class="text-primary">
                <h3 >Join Us <br></h3></span>
                <span class="text-secondary">Are you looking for a best friend? <br>
                Come and join us.<br>
                Approximately 1478 dogs & cats die every day on road in India. 
                Pawesome is on a mission to provide every dog and cat a home before 2030. <br>
                It's just one of the many ways Pawesome! gives back and helps you become a part of something larger. <br>
                Join Pawesome Community and help setting up Pet houses in your surrounding for strays.<br>
                 Adopt the rescued animals from our petshelter absolutely free</span ><br>
                <a  href='adoption.php?userid=<?php echo $userid?>'>ADOPT NOW</a>
                
                </div>
                         
            
                <img src ="petsitting.jpg">
                <div class="pet">
                <img src="pet-sit.png">
                
                <a href="#">BOOK YOUR SLOTS</a></h3>
                </div>
            
         
            <img src="volunteer.jpg">
            <h3>volunteer now
            <a href='volunteer.php?userid=<?php echo $userid?>'>VOLUNTEER NOW</a></h3>
         
         
    
    </div>
    
</main>


    
</body>
</html>