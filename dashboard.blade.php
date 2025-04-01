<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: white;
            padding: 20px;
            position: fixed;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
            width: 100%;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>
    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <h4>Student Dashboard</h4>
        <a href="#">Home</a>
        <a href="{{ route('projects.create') }}">Submit Proposal</a>
        <a href="#">My Projects</a>
        <a href="#">Assigned Supervisor</a>
        <a href="#">Settings</a>
        <form action="{{ route('student.logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-danger w-100">Logout</button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h2>Welcome, {{ $student->student_first_name }} {{ $student->student_last_name }}</h2>

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <!-- Search Projects -->
        <h4>Search Projects</h4>
        <form action="{{ route('projects.search') }}" method="GET" class="d-flex">
            <input type="text" name="q" placeholder="Search by project name or keyword" class="form-control me-2">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <!-- Assigned Supervisor -->
        @if($supervisor)
            <h4>Your Supervisor</h4>
            <p>Name: {{ $supervisor->supervisor_first_name }} {{ $supervisor->supervisor_last_name }}</p>
            <p>Email: {{ $supervisor->supervisor_email }}</p>
            <p>Phone: {{ $supervisor->supervisor_phone_number }}</p>
        @else
            <p>No supervisor assigned yet.</p>
        @endif

        <!-- Manage Projects Table -->
        <h4>Your Projects</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Project Code</th>
                    <th>Project Name</th>
                    <th>Department</th>
                    <th>Problems</th>
                    <th>Solutions</th>
                    <th>Abstract</th>
                    <th>Dissertation</th>
                    <th>Source Codes</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                    <tr>
                        <td>{{ $project->project_code }}</td>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->department->department_name }}</td>
                        <td>{{ $project->project_problems }}</td>
                        <td>{{ $project->project_solutions }}</td>
                        <td>{{ Str::limit($project->project_abstract, 50) }}</td>
                        <td>{{ $project->project_dissertation }}</td>
                        <td><a href="{{ $project->project_source_codes }}" target="_blank">View Code</a></td>
                        <td>
                            <a href="{{ route('projects.edit', $project->project_code) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('projects.destroy', $project->project_code) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="9">No projects submitted yet.</td></tr>
                @endforelse
            </tbody>
        </table>

        <!-- Project Image -->
        <div class="text-center">
            <img src="https://via.placeholder.com/800x400?text=RP+Final+Year+Projects" alt="Project Image" class="img-fluid rounded">
        </div>
    </div>
</body>
</html>
