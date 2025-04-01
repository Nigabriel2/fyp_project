<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultyController extends Controller
{
    public function create()
    {
        $projects = project::all();
        $departments = Department::all();
        $students = Student::all();             
        return view('projects.create', compact('departments', 'students', 'projects'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'faculty_code' => 'required|unique:faculties,faculty_code',
            'faculty_name' => 'required',
            'department_code' => 'required|exists:departments,department_code',
        ]);

        Faculty::create([
            'faculty_code' => $request->faculty_code,
            'faculty_name' => $request->faculty_name,
            'department_code' => $request->department_code,
        ]);

        return redirect()->back()->with('success', 'Faculty added successfully!');
    }
   
}
