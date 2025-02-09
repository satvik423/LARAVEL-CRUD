<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    $students = [
        ['name' => 'John', 'rollno' => '1', 'age' => '20'],
        ['name' => 'Doe', 'rollno' => '2', 'age' => '21'],
        ['name' => 'Jane', 'rollno' => '3', 'age' => '22'],
        ['name' => 'Smith', 'rollno' => '4', 'age' => '23'],
        ['name' => 'Alex', 'rollno' => '5', 'age' => '24'],
    ];
    return view('students.index', ['greeting' => 'Hello', 'students' => $students]);
});

Route::get('/students/create', function () {
    return view('students.create');
});
Route::get('/students/{id}', function ($id) {
    return view('students.show', ['id' => $id]);
});
