<?php
    include('connect.php');
   

	if(isset($_POST["submit"]))
    {
	
		$ptype=$_POST["type"];
		$place=$_POST["place"];
		$pstatus=$_POST["status"];
		$pimg=$_FILES["file"]["name"];
		$sql="INSERT INTO pet_details (images,type_of_pet,place_of_adoption,status) VALUES('$pimg','$ptype','$place','$pstatus')";
		$res=mysqli_query($conn,$sql);

		if(!$res)
        {
            echo"not connected";
        }
        
	
    }
	
	?>
    <html>
        <body>
<h1>UPLOAD PET DETAILS</h1>
    <form method="POST" action="#" enctype="multipart/form-data" >
   
   
   <label>File Upload:</label><input type="file" name="file" /><br><br>
   <label>Pet Type</label><input type="text" name="type"/><br><br>
    <label>place of adoption:</label><input type="text" name="place"/><br><br>
   <label>Status</label> 
   <select name="status" id="status" placeholder="select option">
    <option value="adopted">Adopted</option>
    <option value="toadopt">To adopt</option>
</select>
    <br><br>
    
   <input type="submit" name="submit"/>
   </form>
   <a href="admin_view_pets.php">VIEW PET DETAILS</a>
</body>
</html>


