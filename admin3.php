<?php

     $con=mysqli_connect('localhost','root','','iwt');

	$result=mysqli_query($con,"select * from changingapartment");

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Our Services </title>
		<link rel="stylesheet" href="styles/adminstyle3.css"/>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="menubar">
			<button type="submit"class="btnlogin" ><a href="#">Login</a></button>
			<button type="submit"class="btnRegister"><a href="#">Register</a></button>

			<div class="leftmenu">
				<h1 class="text" >NIWAHANA APARTMENTS</h1>
			</div>
			<ul>
				<li style="font-size:20px"> <a href="#"> Home </a> </li>
				<li style="font-size:20px"> <a href="#"> Apartments </a> </li>
				<li style="font-size:20px"> <a href="#">About Us </a> </li>
				<li style="font-size:20px"> <a href="Services.html">Services </a> </li>
				<li style="font-size:20px">  <a href="#">Contact Us </a> </li>
			</ul>
		</div>
		<hr>
		<h1 align="center" class="capitalize"> our services </h1>
		<center>
		<div class="tablechangingapartment"> 
		
		<table border="1" width="100%">
				<tr>
					<th> Fullname </th>
					<th> DateOfBirth </th>
					<th> NIC </th>
					<th> MobileNo </th>
					<th> Email </th>
					<th> ChangingType </th>
					<th> ApartNo </th>
					<th> Address </th>
					<th> Apartmenttype </th>
					<th colspan="2" align="center"> Operation </th>
				</tr>

				<!-- function -->
					<?php
					readData();

					function readData()
					{
						global $con;
						$sql="select * from changingapartment";
						$result=$con->query($sql);

						if($result->num_rows>0)
						{
							while($row=$result->fetch_assoc())
							{
								$Fullname=$row['fullname'];
								$DateOfBirth=$row['dob'];
								$nic=$row['nic'];
								$MobileNo=$row['mobileno']; 
								$Email=$row['email'];
								$ChangingType=$row['changingtype'];
								$ApartNo=$row['apartno'];
								$Address=$row['address'];
								$Apartmenttype=$row['apartmenttype'];

								echo"<tr>
									<td>".$Fullname."</td><td>".
									$DateOfBirth."</td><td>".
									$nic."</td><td>".
									$MobileNo."</td><td>".
									$Email."</td><td>".
									$ChangingType."</td><td>".
									$ApartNo."</td><td>".
									$Address."</td><td>".
									$Apartmenttype."</td><td>".
									"<button type='submit'><a href ='edit3.php?ApartNo=$ApartNo'>EDIT RECORD</a> </button></td><td>".
									"<button type='submit'><a href ='delete3.php?ApartNo=$ApartNo'> DELETE</a> </button></td>";
							}
						}
						else{
							echo"no result";

						}
						$con ->close();

					}
					?>
			

			</table>
			
		</div>
		</center>
		<hr>
		
		<div>
			<footer class="footer">
				<div class="cont">
					<div class="col">
						<div class="card">
							<h2>About Us</h2>
								<p>We're excited to offer some quality apartments.
									The Niwahana Apartments(Pvt) Ltd is one of the leading companies in the real estate sector in Sri Lanka.
									We have over 20 years experience in real estate.</p>
						</div>
					</div>
		 
					<div class="col">
						<div class="card">
							<h2>Find Us </h2>
								<p> Facebook: Niwahana Apartments<br>
									Instagram : niwahanalive<br>
									Email: inquire@Napartments.com <br>
				 
								</p>
						</div>
					</div>
		 
					<div class="col">
						<div class="card">
							<h2>Location</h2>
								<p> No 14/2,<br>Athurugiriya road,<br>Malabe.<br></p>
						</div>
					</div>
		 
					<div class="col">
						<div class="card">
							<h2>Hotline</h2>
								<p>+94 355 584 894<br>+94 445 236 777<br>+94 558 326 256<br></p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>