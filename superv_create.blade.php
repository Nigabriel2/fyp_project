<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Supervisor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
            position: fixed;
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
            margin-left: 260px;
            padding: 20px;
            flex-grow: 1;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center">Admin Panel</h4>
        <a href="{{ url('admin_dashboard') }}">DASHBOARD</a>
        <a href="assignSupervisor">Assign Supervisor</a>
        <a href="{{ url('superv-create') }}">New Supervisor</a>
        <a href="department">Add Department</a>
        <a href="faculty">Add Faculty</a>
        <a href="campus">Add Campus</a>
        <a href="register">Register New Student</a>
        <a href="adminlogin" class="btn btn-danger mt-3">Logout</a>
    </div>
    
    <div class="content">
        <h2 class="text-center">Create Supervisor</h2>
    
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    
        <form action="{{ route('superv.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" name="supervisor_email" class="form-control" required>
            </div>
    
            <div class="mb-3">
                <label class="form-label">First Name:</label>
                <input type="text" name="supervisor_first_name" class="form-control" required>
            </div>
    
            <div class="mb-3">
                <label class="form-label">Last Name:</label>
                <input type="text" name="supervisor_lastn_ame" class="form-control" required>
            </div>
    
            <div class="mb-3">
                <label class="form-label">Phone Number:</label>
                <input type="text" name="supervisor_phone_number" class="form-control" required>
            </div>
    
            <div class="mb-3">
                <label class="form-label">Project Code:</label>
                <input type="text" name="project_code" class="form-control" required>
            </div>
    
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>