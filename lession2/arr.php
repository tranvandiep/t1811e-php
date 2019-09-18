<?php
$arr1 = array();
$arr1 = [];

$arr2 = array(1, 2, 3, 6, 4, 3);
$arr2 = [1, 2, 3, 6, 4, 3];

$arr2[] = 8;
$arr2[] = 10;

array_push($arr2, 123);

for ($i = 0; $i < count($arr2); $i++) {
	echo $arr2[$i];
}

foreach ($arr2 as $value) {
	echo $value;
}

// $_GET['username']=>$value
// unset($_GET['username']);

array_splice($arr2, 1, 10);
var_dump($arr2);

$arr = [
	'fullname' => 'TRAN VAN A',
	'age'      => 12
];

unset($arr['age']);

$arr['abc'] = "sksahdashdasdhasjgdajsdgasjhgd";
$arr['a2']  = "sdsdf";

foreach ($arr as $key => $value) {
	echo $key;
}

$studentList = [];
$student     = [
	'fullname' => 'A',
	'age'      => 2
];
$studentList[] = $student;

$student = [
	'fullname' => 'B',
	'age'      => 2
];
$studentList[] = $student;

$student = [
	'fullname' => 'C',
	'age'      => 2
];
$studentList[] = $student;