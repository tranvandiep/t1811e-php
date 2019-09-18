<?php
require_once ('People.php');

class Student extends People {
	public $rollNo;

	public function __construct($fullname = '', $age = 0, $gender = 'Nam', $rollNo = '') {
		parent::__construct($fullname, $age, $gender);
		$this->rollNo = $rollNo;
	}

	public function abc() {
		//code
		echo 'testing...';
	}
}