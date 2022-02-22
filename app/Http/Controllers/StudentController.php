<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;

    public function index()
    {
        $this->student = new Student();
        $this->student->newStudent();
        return 'success';

//        $this->students = student::getAllStudent();
//        return view('all', [
//            'students' => $this->students
//        ]);
    }
}
