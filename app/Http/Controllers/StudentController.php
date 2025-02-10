<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // route -> /students
        // fetch all records and pass into the index view
        // $students = student::all();
        $students = student::orderBy('class', 'asc')->paginate(5);
        return view('students.index', ['students' => $students]);
    }

    public function show($id)
    {
        // route -> /students/{id}
        // fetch the record with the given id and pass into the show view
        $student = student::findOrFail($id);

        return view('students.show', ['student' => $student]);
    }

    public function create()
    {
        // route -> /students/create
        // return the create view
        return view('students.create');
    }

    public function store(Request $request)
    {
        // route -> /students/ (POST)
        // handles POST request to store the new student record in table
    }
}
