<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Branch;
use App\Http\Requests\StoreTeacherRequest;
use App\Models\teachers;

class TeacherController extends Controller
{
    public function index()
    {
        // route -> /teachers
        // Fetch all teachers with their branch information and paginate results
        $teachers = teachers::with('branch')->orderBy('branch_id', 'asc')->paginate(5);
        return view('teachers.index', ['teachers' => $teachers]);
    }

    public function show($id)
    {
        // route -> /teachers/{id}
        // Fetch the teacher along with their branch
        $teacher = teachers::with('branch')->findOrFail($id);

        // Fetch all students belonging to the same branch as the teacher
        $students = Student::where('branch_id', $teacher->branch_id)->orderBy('class', 'asc')->get();

        return view('teachers.show', [
            'teacher' => $teacher,
            'students' => $students
        ]);
    }

    public function create()
    {
        // route -> /teachers/create
        // Return the create view with all branches
        $branches = Branch::all();
        return view('teachers.create', ['branches' => $branches]);
    }

    public function store(StoreTeacherRequest $request)
    {
        // route -> /teachers/ (POST)
        // Handles POST request to store the new teacher record in the table
        teachers::create($request->validated());
        return redirect()->route('teachers.index')->with('success', 'Teacher record created successfully');
    }

    public function destroy($id)
    {
        // route -> /teachers/{id} (DELETE)
        // Handles DELETE request to remove a teacher by ID
        $teacher = teachers::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher record deleted successfully');
    }
}
