<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Controllers\Controller;

class TeachersController extends Controller
{

    public function index()
    {
        $teachers = teacher::all();
        return $teachers;

    }


    public function agregar_teacher(Request $request)
    {
     $teacher=new teacher();
     $teacher->name=$request->name;
     $teacher->last_name=$request->last_name;
     $teacher->age=$request->age;
     $teacher->number_phone=$request->number_phone;
     $teacher->email=$request->email;

 
     $teacher->save();
 
     } 


     public function update_teacher(Request $request, $id)
     {
         $teacher=teacher::findOrFail($request->id);
         $teacher->name=$request->name;
         $teacher->last_name=$request->last_name;
         $teacher->age=$request->age;
         $teacher->number_phone=$request->number_phone;
         $teacher->email=$request->email;

         $teacher->save();
         return $teacher;
     }


     public function destroy_teacher($id)
     {
         $teacher = teacher::destroy($id);
         return $teacher;
 
     }
}
