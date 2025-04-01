<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
        .navbar {
            background-color: #111;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #add8e6;
        }
        .jumbotron {
            background-color: #111;
            color: #fff;
            padding: 4rem 2rem;
            margin-bottom: 2rem;
            border-radius: 0.3rem;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .feature-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #add8e6;
        }
        hr{
            border-color: #333;
        }
        a{
            color: #add8e6;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#" style="color:#add8e6;">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                <a class="nav-link" href="home">Home</a>
                </li>
               
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="admin">Dashboard</a>
                </li>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to the Admin Dashboard!</h1>
            <p class="lead">Manage users, assign supervisors, and generate reports.</p>
            <hr class="my-4">
            <p>Use the navigation above to access different admin functionalities.</p>
            <a class="btn btn-primary btn-lg" href="admindash" role="button">Manage</a>
        </div>

        <div class="row">
            
            <div class="col-md-4">
                <div class="text-center">
                    <i class="feature-icon fas fa-user-plus"></i>
                    <h3>Assign Supervisors</h3>
                    <p>Assign supervisors to students.</p>
                </div>
            </div>
        
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/yourfontawesomekit.js" crossorigin="anonymous"></script>
</body>
</html>