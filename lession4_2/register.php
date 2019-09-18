<?php
session_start();
if (!empty($_POST)) {
	$username = $_POST['username'];
	$fullname = $_POST['fullname'];
	$password = $_POST['password'];

	//server php -> save cookie toi brower
	$_SESSION['cName']     = $username;
	$_SESSION['cPassword'] = $password;
	$_SESSION['cFullname'] = $fullname;

	header('Location: login.php');
	die();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MySQL tutorial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Register User
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
						<label>Full Name:</label>
						<input required type="text" name="fullname" class="form-control" value="">
					</div>
					<div class="form-group">
						<label>User Name:</label>
						<input required type="text" name="username" class="form-control" value="">
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input required type="password" name="password" class="form-control" value="">
					</div>
					<button class="btn btn-success">Register</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>