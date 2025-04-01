<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
            color: white;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center">Admin Panel</h4>
        <a href="{{ url('admin_dashboard') }}">DASHBOARD</a>
        <a href="assignSupervisor" >Assign Supervisor</a>
        <a href="{{ url('superv-create') }}">new Supervisor</a>
        <a href="department" >Add Department</a>
        <a href="faculty" >Add Faculty</a>
        <a href="campus" >Add Campus</a>
        <a href="register" >register new student</a>
        <a href="adminlogin" class="btn btn-danger mt-3">Logout</a>
    </div>

    <div class="content">
        <h2 class="text-center">Admin Dashboard</h2>
        
        <div class="modal-content p-3">
                <h5>Assign Supervisor To Student</h5>
                <form action="{{ route('supervisos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
    <label for="student_reg_number" class="form-label">student Reg number</label>
    <select class="form-control" id="student_reg_number" name="student_reg_number" required>
        <option value="">--select Reg number--</option>
        @foreach(App\Models\Student::all() as $student)
            <option value="{{ $student->student_reg_number }}">{{ $student->student_reg_number }}</option>
        @endforeach
    </select>
    </div>
    <div class="mb-3">
    <label for="supervisor_email" class="form-label">Supervisor mail</label>
    <select class="form-control" id="supervisor_email" name="supervisor_email" required>
        <option value="">--select Supervisor mail--</option>
        @foreach(App\Models\Supervisor::all() as $student)
            <option value="{{ $student->supervisor_email }}">{{ $student->supervisor_email }}</option>
        @endforeach
    </select>
    </div>
    <div class="mb-3">
    <label for="department_code" class="form-label">Department code</label>
    <select class="form-control" id="department_code" name="department_code" required>
        <option value="">--select Department--</option>
        @foreach(App\Models\Department::all() as $student)
            <option value="{{ $student->department_code }}">{{ $student->department_name }}</option>
        @endforeach
    </select>
    </div>
    <div class="mb-3">
    <label for="faculty_code" class="form-label">Faculty</label>
    <select class="form-control" id="faculty_code" name="faculty_code" required>
        <option value="">--select faculty--</option>
        @foreach(App\Models\Faculty::all() as $student)
            <option value="{{ $student->faculty_code }}">{{ $student->faculty_name }}</option>
        @endforeach
    </select>
    </div>
    <div class="mb-3">
    <label for="Campus_id" class="form-label">Campus</label>
    <select class="form-control" id="Campus_id" name="Campus_id" required>
        <option value="">--select Campus--</option>
        @foreach(App\Models\Campus::all() as $student)
            <option value="{{ $student->Campus_id }}">{{ $student->Campus_name }}</option>
        @endforeach
    </select>
    </div>
    <button type="submit" class="btn btn-primary">Assign</button>
</form>

            </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


