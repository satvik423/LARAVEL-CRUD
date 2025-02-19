<?php

namespace App\Http\Controllers;

use App\Events\NewStudentAdded;
use App\Models\student;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest;
use App\Events\StudentDeleted;

class StudentController extends Controller
{
    public function index()
    {
        // route -> /students
        // fetch all records and pass into the index view
        // $students = student::all();
        $students = student::with('branch')->orderBy('class', 'asc')->paginate(5);
        return view('students.index', ['students' => $students]);
    }

    public function show($id)
    {
        // route -> /students/{id}
        // fetch the record with the given id and pass into the show view
        $student = student::with('branch')->findOrFail($id);

        return view('students.show', ['student' => $student]);
    }

    public function create()
    {
        // route -> /students/create
        // return the create view
        $branches = Branch::all();
        return view('students.create', ['branches' => $branches]);
    }

    public function store(StoreStudentRequest  $request)
    {
        // route -> /students/ (POST)
        // handles POST request to store the new student record in table
        // validate the request
        $student = student::create($request->validated());
        event(new NewStudentAdded($student));
        return redirect()->route('students.index')->with('success', 'Student record created successfully');
    }

    public function destroy($id)
    {
        // route -> /students/{id} (DELETE)
        // handles DELETE request to delete the student record with the given id
        $student = student::findOrFail($id);
        event(new StudentDeleted($student));
        $student = $student->delete();
        return redirect()->route('students.index')->with('success', 'Student record deleted successfully');
    }

    public function edit($id)
    {
        // Find the student by ID or fail
        $student = Student::findOrFail($id);
        $branches = Branch::all();

        // Return the edit view with student and branch data
        return view('students.edit', compact('student', 'branches'));
    }

    public function update(StoreStudentRequest $request, $id)
    {
        // Find the student by ID or fail
        $student = Student::findOrFail($id);

        // Update the student record
        $student->update($request->validated());

        // Redirect to the students index page
        return redirect()->route('students.index')->with('success', 'Student record updated successfully');
    }
}
