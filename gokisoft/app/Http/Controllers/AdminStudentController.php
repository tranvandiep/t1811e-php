<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AdminStudentController extends Controller {
	public function showAll(Request $request) {
		$studentList = DB::table('students')->paginate(10);

		return view('admin.student.index')->with([
				'studentList' => $studentList,
				'index'       => 1
			]);
	}
}
