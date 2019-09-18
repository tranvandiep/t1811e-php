<!DOCTYPE html>
<html>
<head>
	<title>FORM tutorial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form method="get" action="register.php">
			<div class="form-group">
			<h2>Register Account</h2>
			</div>
			<div class="form-group">
				<label for="username">User Name</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="username">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<button class="btn btn-success">Register</button>
		</form>
	</div>
</body>
</html>