<?php
if (!empty($_POST)) {
	$pUserName = $_POST['username'];
	$pPassword = $_POST['password'];

	$gUserName = $gPassword = '';

	if (isset($_GET['username'])) {
		$gUserName = $_GET['username'];
	}

	if (isset($_GET['password'])) {
		$gPassword = $_GET['password'];
	}

	if ($pUserName == $gUserName && $pPassword == $gPassword) {
		//redirect welcome.php
		header('Location: welcome.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
						<label>User Name</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<button class="btn btn-success">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>