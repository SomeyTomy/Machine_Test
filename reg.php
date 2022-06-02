<?php
include("db.php");
?>
<html>

<head>
	<title>
		Registration form
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</head>

<body>
	<div class="container pt-5">
		<form  method="POST" action="" class="row g-3">
			<div class="col-md-6">
				<label class="form-label">Email</label>
				<input type="email" class="form-control" name="email">
			</div>
			<div class="col-md-6">
				<label class="form-label">Password</label>
				<input type="password" class="form-control" name="password">
			</div>
			<div class="col-md-6">
				<label class="form-label">Name</label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="col-md-6">
				<label class="form-label">Phone Number</label>
				<input type="text" class="form-control" name="phone">
			</div>
			<div class="col-12">
				<label class="form-label">Address</label>
				<textarea class="form-control" name="address"></textarea>
			</div>
			
			<div class="col-12">
				<input class="btn btn-primary" type="submit" name="save"> 
			</div>
			<div class="col-12">
				<a href="login.php">you have already account?</a>
			</div>
		</form>
	</div>
</body>

<?php
	if(isset($_POST['save']))
	{

		$email=$_POST['email'];
		$password=$_POST['password'];
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		// echo $email.$password.$name.$phone.$address;
		$sql = "INSERT INTO tbl_registration(reg_email,reg_password,reg_phone,reg_name,reg_address) VALUES ('$email' ,'$password','$phone','$name','$address')";

		if ($conn->query($sql) === TRUE) 
		{
    		echo "<script> alert('New record created successfully');</script> ";
		} 
		else 
		{
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		// echo $sql;
	}



?>

</html>