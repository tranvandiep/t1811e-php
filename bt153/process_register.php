<?php
$fullname = $fullname = $password = '';

if (!empty($_POST)) {
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username != '' && $password != '') {
		//redirect login.php
		header('Location: login.php?username='.$username.'&password='.$password);
	}
}