<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'department_code' => 'required|unique:departments,department_code',
            'department_name' => 'required',
            'student_reg_number' => 'required|exists:students,student_reg_number',
        ]);

        Department::create([
            'department_code' => $request->department_code,
            'department_name' => $request->department_name,
            'student_reg_number' => $request->student_reg_number,
        ]);

        return redirect()->back()->with('success', 'Department added successfully!');
    }
}
