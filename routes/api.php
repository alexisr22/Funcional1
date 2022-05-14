<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(StudentsController::class)->group(function (){

    Route::get('/students', 'index');
    Route::post('/student', 'agregar_student');
    Route::put('/student/{id}', 'update_student');
    Route::delete('/student/{id}', 'destroy_student');
});

Route::controller(TeachersController::class)->group(function (){

    Route::get('/teachers', 'index');
    Route::post('/teacher', 'agregar_teacher');
    Route::put('/teacher/{id}', 'update_teacher');
    Route::delete('/teacher/{id}', 'destroy_teacher');



});