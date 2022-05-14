<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{

    public function index()
    {
        $students = student::all();
        return $students; 

    }


    public function agregar_student(Request $request)
    {
        $student=new student();
        $student->name_class=$request->name_class;
        $student->classroom=$request->classroom;
        $student->teacher=$request->teacher;
    
        $student->save();
    }


    public function update_student(Request $request, $id)
    {
        $student=student::findOrFail($request->id);
        $student->name_class=$request->name_class;
        $student->classroom=$request->classroom;
        $student->teacher=$request->teacher;

        $student->save();
        return $student;
    }


    public function destroy_student($id)
    {
        $student = student::destroy($id);
        return $student;
    }
}
