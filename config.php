<?php
	
	/*connection object*/
	$con=new mysqli("localhost","root","","iwt");
	
	/*check connection*/
	if($con->connect_error)
	{
		die("Connection failed:".$con->connect_error);
	}
	
	/*connection is successful*/
	//echo"Successfully Connected.";
	
?>