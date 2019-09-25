<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class StudentController extends Controller {
	public function viewAdd(Request $request) {
		# code...
		return view('student.view_add');
	}

	public function addStudent(Request $request) {
		# code...
		// var_dump($request->all());
		$currentTime = date('Y-m-d H:i:s');

		DB::table('students')->insert([
				'rollno'     => $request->rollno,
				'fullname'   => $request->fullname,
				'age'        => $request->age,
				'address'    => $request->address,
				'email'      => $request->email,
				'created_at' => $currentTime,
				'updated_at' => $currentTime
			]);
		return redirect()->route('viewAdd');
	}

	public function showAll(Request $request) {
		# code...
		$studentList = DB::table("students")
			->paginate(6);

		$index = 1;
		if (isset($request->page)) {
			$index = ($request->page-1)*6+1;
		}

		return view('student.index')->with([
				'index'       => $index,
				'studentList' => $studentList
			]);
	}
}
