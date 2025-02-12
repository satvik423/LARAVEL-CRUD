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
        // validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|integer|min:1|max:12',
            'mark' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
        ]);

        student::create($validatedData);
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        // route -> /students/{id} (DELETE)
        // handles DELETE request to delete the student record with the given id
        $student = student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index');
    }
}
