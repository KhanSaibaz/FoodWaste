<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'db_connection.php';
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$rating=0;

	$sql1="SELECT * FROM `user_details` WHERE email='$email'";
	$result1=mysqli_query($connection,$sql1);
	$num=mysqli_num_rows($result1);
	
	if($num>=1){

		header('location:loginPage.php');
	}

	else{
		if($cpass==$pass){
			$sql="INSERT INTO `user_details` ( `name`, `email`, `password`, `phone`, `rating`) VALUES ( '$name', '$email', '$pass', '$phone', '$rating')";
			$result=mysqli_query($connection,$sql);
			if($result){
					echo '<script type="text/JavaScript">
					alert("Sucessfully register");
					</script>';
					header('location:loginPage.php');

					// session_start();
					// $_SESSION[]
			}
		}
		else{
			echo '<script type="text/JavaScript">
					alert("password doesnt match");
					</script>';
		}
	
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="registerstyle.css">

</head>

<body>
	<div class="box-form">
		<div class="left">
			<div class="overlay fs-sm-2">
				<h1>Hello World.</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Curabitur et est sed felis aliquet sollicitudin</p>
			</div>
		</div>


		<div class="loginBox">
			<h5>Register</h5>

				<form action="./registerPage.php" method='POST'>
				<div class="inputs">
					<input type="text" placeholder="Enter Name" name="name">
					<br>
					<input type="text" placeholder="Enter Phone no" name="phone">
					<br>
					<input type="email" placeholder="Enter Email" name="email">
					<br>
					<input type="password" placeholder=" Enter password" name="pass">
					<br>
					<input type="password" placeholder="Repeat password" name="cpass">
					<br>
				</div>

				<br><br>

				<div class="forget-password">
					
					<p>forget password?</p>
				</div>

				<br>
				<button>Login</button>
			</div>

	</form>
	</div>

</body>

</html>