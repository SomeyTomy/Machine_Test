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
	<div class="container p-5">
		<form class="row g-3" action="" method="POST">
			<div class="col-md-12">
				<label class="form-label">Email</label>
				<input type="email" class="form-control" name="email">
			</div>
			<div class="col-md-12">
				<label class="form-label">Password</label>
				<input type="password" class="form-control" name="password">
			</div>
			<div class="col-12">
				<input class="btb btn-primary" type="submit" name="login"> 
			</div>
            <div class="col-12">
				<a href="reg.php">Are you a new user ?</a> 
			</div>
		</form>
	</div>
</body>


<?php
    session_start();

    if(isset($_POST['login']))
    {
        $email =  $_POST["email"];
        $password =  $_POST["password"];

        $sql = mysqli_query($conn,"SELECT * FROM tbl_registration where reg_email = '$email' AND reg_password = '$password'");
        $row  = mysqli_fetch_array($sql);
        if(is_array($row)) 
        {
            $_SESSION['user_name'] = $email;
            header("location:home.php");
        }
        else
        {
            echo("Invalid Username or Password!");
        }
        

    }
?>


</html>