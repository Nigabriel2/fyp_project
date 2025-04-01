<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Supervisor Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000; /* Black background */
            color: #fff; /* White text */
        }
        .navbar {
            background-color: #111; /* Darker black navbar */
        }
        .navbar-light .navbar-nav .nav-link {
            color: #fff; /* White navbar links */
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #add8e6; /* Light blue hover */
        }
        .jumbotron {
            background-color: #111; /* Darker black jumbotron */
            color: #fff;
            padding: 4rem 2rem;
            margin-bottom: 2rem;
            border-radius: 0.3rem;
        }
        .btn-primary {
            background-color: #007bff; /* Blue button */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue hover */
            border-color: #0056b3;
        }
        .feature-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #add8e6; /* light blue icons */
        }
        hr{
            border-color: #333;
        }
        a{
            color: #add8e6;
        }
        .text-danger {
            color: #dc3545 !important; /* Red text */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#" style="color:#add8e6;">Supervisor Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link" href="shome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="supervisor">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to Your Supervisor Dashboard!</h1>
            <p class="lead">Manage your assigned students and interact with them easily.</p>
            <hr class="my-4">
            <p>Use the navigation above to access your dashboard and manage your students.</p>
            <a class="btn btn-primary btn-lg" href="supervisor" role="button">Go to Dashboard</a>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <i class="feature-icon fas fa-users"></i>
                    <h3>Student Management</h3>
                    <p> manage your assigned students.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <i class="feature-icon fas fa-comments"></i>
                    <h3>Interaction</h3>
                    <p>Communicate with your students directly.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <i class="feature-icon fas fa-chart-line"></i>
                    <h3>Progress Tracking</h3>
                    <p>Monitor student progress and project updates.</p>
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