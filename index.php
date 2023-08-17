<?php?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/registrationstyle.css">
<style>
body
{
	margin:0;
	padding:0;
	background-image: url(image/view.jpg);
	background-position: center;
	background-size: cover;
	font-family: sans-serif;
}
</style>
</head>
<body>

<div>
	
		<div class="container">
			<form action="php/registration.php" method="post">
					<img src ="image/th.jpg" class = "avatar">
					<h4 class="display-4 text-center">Register</h4><hr><br>
					
	
					<div class ="form-group">
					<label for="name"><b>Name</b></label>
					<input type="name" class="form-control" id="name" name = "name" placeholder = "Enter your name" required>
					</div>

					<div class ="form-group">
					<label for="email"><b>Email Address</b></label>
					<input type="email" class="form-control" id = "email" name="email" placeholder = "Enter your Email Address" required>
					</div>

					<div class ="form-group">
					<label for="password"><b>Password</b></label>
					<input type="password" class="form-control" id="password" name="password" placeholder = "Enter password"
					required>
					</div>
					<div class ="form-group">
					<label for="city_id"><b>City No.</b></label>
					<input type="number" class="form-control" id="city_id" name="city_id" min = "1" max="3" placeholder = "Enter 1,2,3 only"
					required>
					</div>


					<hr class = "mb-3">
					<button type="submit" class="btn btn-secondary" name="create">Submit</button>
					
					<a href="read.php" class="btn btn-secondary">View</a>

			</form>
		</div>
	
</div>
</body>
</html>