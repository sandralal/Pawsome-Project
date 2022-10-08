<?php
session_start();
include("connection.php");
if(isset($_POST['btn'])){
  $curuser=$_SESSION['useremail'];

  $sql="select payment from pet_sitting where email='$curuser'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($res);
  if($row['payment']=="1-day"){
      //echo"<script> alert('{$curuser}')</script>";
      $price="6 $";
  }
  elseif($row['payment']=="2-day"){
      //echo"<script> alert('{$curuser}')</script>";
      $price="12 $";
  }
  elseif($row['payment']=="3-day"){
      //echo"<script> alert('{$curuser}')</script>";
      $price="18 $";
  }
  elseif($row['payment']=="4-day"){
      //echo"<script> alert('{$curuser}')</script>";
      $price="24 $";
  }
  elseif($row['payment']=="5-day"){
      //echo"<script> alert('{$curuser}')</script>";
      $price="30 $";
  }
  else{
      echo"error";
  }

  $name=$_POST['fname'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state']; 
  $zip=$_POST['zip']; 
  $sql = "INSERT INTO sitting_bill(full_name,email,address,city,state,zip,total) value ('$name','$email','$address','$city','$state','$zip','$price')";
  $query=mysqli_query($conn,$sql);
if(!$query){
   echo "not";
}else{
      header("pet sitting bokked");
  }
  
  
}


?>
<html>
    <head>
    <link rel="stylesheet" href="sitting_billing_style.css">
        <title>billing</title>
</head>
<body class="body">
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="#" method="POST">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="address" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="ccnum" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn" id="btn" name="btn">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
     
      <hr>
      <p>Total  :  <?php  echo$price ; ?>  <span class="price" style="color:black"><b></b></span></p>

    </div>
  </div>
</div>
</body>
</html>