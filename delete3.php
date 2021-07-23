<?php
	
      $con=mysqli_connect('localhost','root','','iwt'); 
	
	$ApartNo = $_GET['i'];
	
	mysqli_query($con,"DELETE FROM changingapartment where apartno='$ApartNo'");
	
	header("location:admin3.php")

	?>
