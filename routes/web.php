<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
     $student = \App\Models\Student::findOrFail(2);

     // One To One

     // find Or Fail нь хэрэв id олдохгүй бол 404 алдаа гаргана
//     dd($student->profile->phone);
//    dd($student->profile());

    // One To Many
//    dd($student->comments);

// Many To Many

//    dd($student->subjects);
    $subject = \App\Models\Subject::findOrFail(1);
//    dd($subject->students);

    $student_subject = \App\Models\StudentSubject::findOrFail(1);
    dd($student_subject->student,$student_subject->subject);
    
});
