<?php
if (isset($_COOKIE['status']) && $_COOKIE['status'] == 1) {
	//login success
} else {
	header('Location: login.php');
	die();
}
$fullname = '';
if (isset($_COOKIE['cFullname'])) {
	$fullname = $_COOKIE['cFullname'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome tutorial</title>
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
				Hello <?=$fullname?>
			</div>
		</div>
	</div>
</body>
</html>