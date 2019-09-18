<?php
require_once ('process_register.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
						<label>Fullname</label>
						<input type="text" name="fullname" class="form-control" value="<?=$fullname?>">
					</div>
					<div class="form-group">
						<label>User Name</label>
						<input type="text" name="username" class="form-control" value="<?=$username?>">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" value="<?=$password?>">
					</div>
					<button class="btn btn-success">Register</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>