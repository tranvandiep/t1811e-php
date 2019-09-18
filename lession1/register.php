<?php
// if (!empty($_POST)) {
// 	$fullname = $_POST['username'];
// 	$password = $_POST['password'];
// 	echo $fullname;
// }
$uName = $pwd = '';
// if (isset($_POST['username'])) {
// 	$uName = $_POST['username'];
// }

// if (isset($_POST['password'])) {
// 	$pwd = $_POST['password'];
// }

// if (isset($_GET['username'])) {
// 	$uName = $_GET['username'];
// }

// if (isset($_GET['password'])) {
// 	$pwd = $_GET['password'];
// }

if (isset($_REQUEST['username'])) {
	$uName = $_REQUEST['username'];
}

if (isset($_REQUEST['password'])) {
	$pwd = $_REQUEST['password'];
}

echo '<br/>uName: '.$uName;
echo '<br/>pwd: '.$pwd;
