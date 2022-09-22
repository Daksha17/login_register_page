<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mob=$_POST['mob'];
    $add=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $country=$_POST['country'];
    $cname=$_POST['cname'];
    $occup=$_POST['occupation'];
    $yoe=$_POST['yoe'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="insert into `reg` (name,mob,address,city,state,pincode,country,cname,occupation,yoe,email,pass) values('$name','$mob','$add','$city','$state','$pincode','$country','$cname','$occup','$yoe','$email','$pass')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "<script> alert('Registered Successfully!');window.location='index.php'</script>";
        
    }
    else{
        die(mysqli_error($con));
    }
}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Register!</title>
	<link rel="stylesheet" type="text/css" href="regstyle.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
 <div class="login-form">
 	<div class="container">
 		<div class="main">
 			<div class="form-img">
 				<img src="reg.jpg">
 			</div>
 			<div class="content">
 				<h2>One Step Away...</h2>
 				<form action="" method="post">
 					<p>Name</p>
 					<input type="text" name="name" placeholder="" required autofocus="">
 					<p>Email</p>
 					<input type="text" name="email" placeholder="" required autofocus="">
 					<p>Mobile Number</p>
 					<input type="text" name="mob" placeholder="" required autofocus="">
 					<p>Address</p>
 					<input type="text" name="address" placeholder="" required autofocus="">
 					<p>City</p>
 					<input type="text" name="city" placeholder="" required autofocus="">
 					<p>State</p>
 					<input type="text" name="state" placeholder="" required autofocus="">
 					<p>Pin Code</p>
 					<input type="text" name="pincode" placeholder="" required autofocus="">
 					<p>Country</p>
 					<input type="text" name="country" placeholder="" required autofocus="">
 					<p>Company Name</p>
 					<input type="text" name="cname" placeholder="" required autofocus="">
 					<p>Occupation</p>
 					<input type="text" name="occupation" placeholder="" required autofocus="">
 					<p>Years of Experience</p>
 					<input type="text" name="yoe" placeholder="" required autofocus="">
                    <p>Password</p>
                    <input type="text" name="pass" placeholder="" required autofocus="">
 					<button class="btn" type="submit" name="submit">Create Account</button>
 					
 				</form>
 			</div>

 		</div>
 	</div>
 </div>
</body>
</html>