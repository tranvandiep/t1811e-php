<?php
function execute($query) {
	//insert data into database
	//open connection
	$conn = mysqli_connect('localhost', 'root', '', 'T1811E');
	mysqli_set_charset($conn, 'utf8');

	mysqli_query($conn, $query);

	//close connection
	mysqli_close($conn);
}

function executeResult($query) {
	//insert data into database
	//open connection
	$conn = mysqli_connect('localhost', 'root', '', 'T1811E');
	mysqli_set_charset($conn, 'utf8');

	//query
	$data   = mysqli_query($conn, $query);
	$result = [];
	while (($row = mysqli_fetch_array($data, 1)) != null) {
		$result[] = $row;
	}
	// var_dump($result);

	//close connection
	mysqli_close($conn);

	return $result;
}