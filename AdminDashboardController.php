<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Campus;
use App\Models\Project;
use App\Models\Supervisor;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $studentsCount    = Student::count();
        $departmentsCount = Department::count();
        $facultiesCount   = Faculty::count();
        $campusesCount    = Campus::count();
        $projectsCount    = Project::count();
        $supervisorsCount = Supervisor::count();

        return view('admin_dashboard', compact(
            'studentsCount',
            'departmentsCount',
            'facultiesCount',
            'campusesCount',
            'projectsCount',
            'supervisorsCount'
        ));
    }
}
