<?php
class People {
	public $fullname;
	public $age;
	public $gender;

	public function __construct($fullname = '', $age = 0, $gender = 'Nam') {
		$this->fullname = $fullname;
		$this->age      = $age;
		$this->gender   = $gender;
	}

	public function onRunning() {
		//code...
	}
}