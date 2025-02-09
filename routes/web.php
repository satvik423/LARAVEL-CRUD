<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    $students = [
        ['name' => 'John', 'rollno' => '1'],
        ['name' => 'Doe', 'rollno' => '2'],
        ['name' => 'Jane', 'rollno' => '3'],
    ];
    return view('students.index', ['greeting' => 'Hello', 'students' => $students]);
});

Route::get('/students/create', function () {
    return view('students.create');
});
Route::get('/students/{id}', function ($id) {
    return view('students.show', ['id' => $id]);
});
