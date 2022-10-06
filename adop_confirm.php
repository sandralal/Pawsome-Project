<?php
include("connect.php");
$PetID;
$name;

$petid=$_GET["PetID"];
$userid=$_GET['userid'];


$sql="SELECT * FROM `pet_details` WHERE petID='$petid'";


$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res))
{
    $type_pet=$row["type_of_pet"];
    $status=$row["status"];
    $image=$row["images"];
    
}



?>
<html>
    <head>
    <link rel="stylesheet"
    href="adoption.css">
</head>
<body>
    <h1>ADOPTION CONFIRMATION</h1>
    
    <?php
    echo 
    '<div  >
    <a href=""><img class="petPic" src="'.$image.'"> </a></div>
    ';
    echo'<div class="textpic">
    <p>Name:'.$type_pet.'</p>
    </div>';
    ?>
        <h1>Are you sure the adoption</h1>
      <?php 
      $yes=" <a href='change.php?name=yes&PetID={$petid}&userid={$userid}' >Yes</a>";
      $no=" <a href='change.php?name=no&PetID={$petid}' >No</a>";
      echo $yes;
      echo $no;

       
       ?>

        
    

</body>
</html>