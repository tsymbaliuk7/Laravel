<?php

namespace App\Http\Controllers;

use App\Car;
use App\Student;
use App\Teacher;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getHome(){
        return view('home');
    }

    public function getStudents(){
        return view('students', ['students'=>Student::get()]);
    }

    public function getTeachers(){
        return view('teachers', ['teachers'=>Teacher::get()]);
    }

    public function getTeacher($id){
        $teacher = Teacher::find($id);
        return view('teacher', ['teacher'=>$teacher, 'students' => $teacher->students]);
    }

    public function getStudent($id){
        $student = Student::find($id);
        return view('student', ['student'=>$student, 'teacher'=> $student->teacher, 'cars'=> $student->cars]);
    }

    public function getCategories($name){
        $categ = Car::where('name', 'like', "$name")->get();
        return view('category', ['category'=>$categ[0], 'students'=>$categ[0]->students]);
    }
}
