<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supervisos; // Ensure model name is correctly referenced

class SupervisosController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'student_reg_number' => 'required|exists:students,student_reg_number',
            'supervisor_email' => 'required|email|exists:supervisors,supervisor_email',
            'department_code' => 'required|exists:departments,department_code',
            'faculty_code' => 'required|exists:faculties,faculty_code',
            'Campus_id' => 'required|exists:campuses,Campus_id',
        ]);

        Supervisos::create([
            'student_reg_number' => $request->student_reg_number,
            'supervisor_email' => $request->supervisor_email,
            'department_code' => $request->department_code,
            'faculty_code' => $request->faculty_code,
            'Campus_id' => $request->Campus_id,
        ]);

        return redirect()->back()->with('success', 'Supervisor added successfully!');
    }
}
