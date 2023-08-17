<?php include "php/read.php"; ?>
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
		<div class="box">
			<h4 class="display-4 text-center">Dashboard</h4><br>
			<?php if (isset($_GET['success'])) { ?>
					<div class = "alert alert-success" role = "alert">
						<?php echo $_GET['success']; ?>
					</div>
				    <?php } ?>
			<?php if(mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
				<thead>
    				<tr>
				      <th scope="col">Id no.</th>
				      <th scope="col">Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Password</th>
				      <th scope="col">City</th>
				   	  <th scope="col">Action</th>
    				</tr>
  				</thead>
  				<tbody>
  					<?php 
  					$i = 0;
  					while($rows = mysqli_fetch_assoc($result)){
  						$i++;
  					?>
   					<tr>
				      <th scope="row"><?=$rows['id']?></th>
				      <td><?=$rows['name']?></td>
				      <td><?php echo $rows['email']?></td>
				      <td><?=$rows['password']?></td>
				      <td><?=$rows['city_name']?></td>
				      <td><a href="update.php?id=<?=$rows['id']?>" 
				      		 class="btn btn-success ">Update</a>

				      	  <a href="php/delete.php?id=<?=$rows['id']?>" 
				      		 class="btn btn-danger ">Delete</a>
				      </td>
				  
				    </tr>
				<?php } ?>
				</tbody>

			</table>
		<?php } ?>
				<hr class = "mb-3">
				<center><a href="index.php" class="btn btn-secondary">Create another account</a></center>
		</div>
	
</div>
</body>
</html>