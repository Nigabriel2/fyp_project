<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      display: flex;
      background-color: #f8f9fa;
      margin: 0;
      font-family: Arial, sans-serif;
    }
    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #343a40;
      padding-top: 20px;
      color: white;
    }
    .sidebar h4 {
      margin-bottom: 20px;
    }
    .sidebar a {
      display: block;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      flex-grow: 1;
      padding: 20px;
      overflow-y: auto;
    }
    .card {
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .icon {
      font-size: 2rem;
      margin-right: 10px;
    }
    .card-header {
      font-weight: bold;
    }
  </style>
</head>
<body>
@if(session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif

  <!-- Sidebar -->
  <div class="sidebar">
    <h4 class="text-center">Admin Panel</h4>
    <a href="{{ url('admin_dashboard') }}">DASHBOARD</a>
    <a href="{{ url('assignSupervisor') }}">Assign Supervisor</a>
    <a href="{{ url('department') }}">Add Department</a>
    <a href="{{ url('faculty') }}">Add Faculty</a>
    <a href="{{ url('campus') }}">Add Campus</a>
    <a href="register" >register new student</a>

<a href="{{ url('adminlogin') }}" class="btn btn-danger mt-3 mx-3">Logout</a>
  </div>

  <!-- Main Content -->
  <div class="content">
    <div class="container-fluid">
      <h2 class="text-center mb-4">
        <i class="fa-solid fa-school icon"></i> Admin Dashboard
      </h2>
      
      <div class="row g-4">
        <!-- Students Count -->
        <div class="col-md-4">
          <div class="card text-white bg-primary h-100">
            <div class="card-header">
              <i class="fa-solid fa-user-graduate icon"></i> Students
            </div>
            <div class="card-body">
              <h5 class="card-title display-4">{{ $studentsCount }}</h5>
            </div>
          </div>
        </div>

        <!-- Departments Count -->
        <div class="col-md-4">
          <div class="card text-white bg-success h-100">
            <div class="card-header">
              <i class="fa-solid fa-building-columns icon"></i> Departments
            </div>
            <div class="card-body">
              <h5 class="card-title display-4">{{ $departmentsCount }}</h5>
            </div>
          </div>
        </div>

        <!-- Faculties Count -->
        <div class="col-md-4">
          <div class="card text-white bg-warning h-100">
            <div class="card-header">
              <i class="fa-solid fa-chalkboard-teacher icon"></i> Faculties
            </div>
            <div class="card-body">
              <h5 class="card-title display-4">{{ $facultiesCount }}</h5>
            </div>
          </div>
        </div>

        <!-- Campuses Count -->
        <div class="col-md-4">
          <div class="card text-white bg-info h-100">
            <div class="card-header">
              <i class="fa-solid fa-building icon"></i> Campuses
            </div>
            <div class="card-body">
              <h5 class="card-title display-4">{{ $campusesCount }}</h5>
            </div>
          </div>
        </div>

        <!-- Projects Count -->
        <div class="col-md-4">
          <div class="card text-white bg-danger h-100">
            <div class="card-header">
              <i class="fa-solid fa-folder icon"></i> Projects
            </div>
            <div class="card-body">
              <h5 class="card-title display-4">{{ $projectsCount }}</h5>
            </div>
          </div>
        </div>

        <!-- Supervisors Count -->
        <div class="col-md-4">
          <div class="card text-white bg-secondary h-100">
            <div class="card-header">
              <i class="fa-solid fa-user-tie icon"></i> Supervisors
            </div>
            <div class="card-body">
              <h5 class="card-title display-4">{{ $supervisorsCount }}</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
