<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$query=mysqli_query($con,"select email,pass from reg where email='$email' and pass='$password'");
	if($query)
	{
		if(mysqli_num_rows($query)>0)
		{
			echo "<script> alert('LoggedIn Successfully!');window.location='index.php'</script>";
        
		}
	
		else
		{
			echo "<script> alert('Incorrect Username or Password!');</script>";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
 <div class="login-form">
 	<div class="container">
 		<div class="main">
 			<div class="content">
 				<h2>Log in</h2>
 				<form action="" method="post">
 					<input id="user" type="text" name="email" placeholder="Email" required autofocus="">
 					<input id="pass" type="password" name="pass" placeholder="Password" required autofocus="">
 					<button class="btn" type="submit" name="submit">Log In</button>
 				</form>
 				<p class="account"><a href="<?php echo 'register.php' ?>">Don't have an account?</a></p>
 			</div>
 			<div class="form-img">
 				<img src="logyeti.jpg">
 			</div>
 		</div>
 	</div>
 </div>
 <script src="script.js"></script>
</body>
</html>