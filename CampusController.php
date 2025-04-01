<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campus;

class CampusController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Campus_id' => 'required|unique:campuses,Campus_id',
            'Campus_name' => 'required',
            'faculty_code' => 'required|exists:faculties,faculty_code',
        ]);

        Campus::create([
            'Campus_id' => $request->Campus_id,
            'Campus_name' => $request->Campus_name,
            'faculty_code' => $request->faculty_code,
        ]);

        return redirect()->back()->with('success', 'Campus added successfully!');
    }
}
