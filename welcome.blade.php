<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            
        }
        .welcome-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .card {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container welcome-container">
        <div class="card">
            <h1 class="mb-4">Welcome to Student Portal</h1>
            <p class="mb-4">This platform is designed to help students to submit the project proposal, collaborate with supervisors, and manage academic progress efficiently.</p>
            <div>
    
                <a href="register" class="btn btn-success">Register</a>
                <a href="login" class="btn btn-secondary me-2">Supervisor</a>
                <a href="adminlogin" class="btn btn-danger">Admin</a>
            </div>
        </div>
    </div>
</body>
</html>
