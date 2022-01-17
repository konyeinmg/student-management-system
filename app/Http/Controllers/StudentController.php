<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('student', ['students' => $students, 'layout' => 'index']);
    }

    public function create(){
        $students = Student::all();
        return view('student', ['students' => $students, 'layout' => 'create']);
    }

    public function store(){
        $student = new Student();
        $student->cne = request()->cne;
        $student->firstName = request()->firstName;
        $student->secondName = request()->secondName;
        $student->age = request()->age;
        $student->speciality = request()->speciality;
        $student->save();
        return redirect('/');
    }

    public function show($id){
        $student = Student::find($id);
        $students = Student::all();
        return view('student', ['students' => $students, 'student' => $student, 'layout' => 'show']);
    }

    public function edit($id){
        $student = Student::find($id);
        $students = Student::all();
        return view('student', ['students' => $students, 'student' => $student, 'layout' => 'edit']);
    }

    public function update($id){
        $student = Student::find($id);
        $student->cne = request()->cne;
        $student->firstName = request()->firstName;
        $student->secondName = request()->secondName;
        $student->age = request()->age;
        $student->speciality = request()->speciality;
        $student->save();
        return redirect('/');
    }

    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }
}
