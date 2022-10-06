<?php
include("connect.php");
$nm=$_GET['name'];
$userid=$_GET['userid'];
$PetID;
$petid=$_GET["PetID"];
//$userid=$_SESSION['userid'];

if($nm=='yes')
{   
    $sql="update pet_details set status='adopted',userid='$userid' where petID='$petid'";
  
    $res=mysqli_query($conn,$sql);

   
}
else
{
    $sql="update pet_details set status='to adopt' where petID='$petid'";
   
    $res=mysqli_query($conn,$sql);
}
if(isset($_POST['submit']))
{
    $address=$_POST['address'];
    $sql="update pet_details set address='$address' where userid='$userid')";
    $res=mysqli_query($conn,$sql);

}
?>
<html>
<form action="#"method="POST">
    <label for="address">Please enter your contact address:</label><br>
    <input id="address" name="address" placeholder="contact address....." style="height:200px"><br>
   
    <input type="checkbox" name="confirm"> <label for="confirm">Contact Address is varified</label><br>
    <input type="submit" value="save my data" >
</form>
    </html>