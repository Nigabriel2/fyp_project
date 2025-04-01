<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supervisor;

class SupervCreateController extends Controller
{
    public function create()
    {
        return view('superv_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'supervisor_email' => 'required|email|unique:supervisors,supervisor_email',
            'supervisor_first_name' => 'required|string|max:255',
            'supervisor_lastn_ame' => 'required|string|max:255',
            'supervisor_phone_number' => 'required|string|max:15',
            'project_code' => 'required|string|exists:projects,project_code',
        ]);

        // Insert data explicitly (without timestamps)
        Supervisor::insert([
            'supervisor_email' => $request->supervisor_email,
            'supervisor_first_name' => $request->supervisor_first_name,
            'supervisor_lastn_ame' => $request->supervisor_lastn_ame,
            'supervisor_phone_number' => $request->supervisor_phone_number,
            'project_code' => $request->project_code,
        ]);

        return redirect()->route('superv.create')->with('success', 'Supervisor created successfully.');
    }
}
