<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'db_connection.php';
	$email=$_POST['email'];
	$pass=$_POST['pass'];


	$sql="SELECT * FROM `user_details` WHERE email='$email' and password ='$pass'";
	$result=mysqli_query($connection,$sql);
	$num=mysqli_num_rows($result);
	echo $num;

	if($num>=1){
		session_start();
		$_SESSION['user']=$email;
		header('location:selectRole.php');
		mysqli_close($connection);
		
	}
	else{
		echo '<script type="text/JavaScript">
					alert("Invalid Id password");
					</script>';
	}


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login Page in HTML with CSS Code Example</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="./loginstyle.css">

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

    <form action="./loginPage.php" method='POST'> 
		<div class="loginBox">
			<h5>Login</h5>
			<p>Don't have an account? <a href="#">Create Your Account</a> it takes less than a minute</p>
			<div class="inputs">
				<input type="temailxt" placeholder="user email" name='email'>
				<br>
				<input type="password" placeholder="password" name='pass'>
			</div>

			<br><br>
		<div>

		</div>
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