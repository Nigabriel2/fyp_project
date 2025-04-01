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
            height: 100vh; /* Make body take full viewport height */
            margin: 0; /* Remove default body margin */
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
            display: flex; /* Use flexbox for content */
            flex-direction: column; /* Stack content vertically */
        }
        .row {
            flex-grow: 1; /* Allow row to take remaining vertical space */
            display: flex; /* Use flexbox for row */
            align-items: center; /* Center items vertically */
            justify-content: center; /* Center items horizontally */
        }
        .count-badge {
            display: inline-block;
            min-width: 30px;
            height: 30px;
            padding: 5px;
            border-radius: 50%;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            color: white;
            margin-left: 5px;
        }
        #supervisorCount { background-color: #007bff; }
        #departmentCount { background-color: #17a2b8; }
        #facultyCount { background-color: #ffc107; }
        #campusCount { background-color: #6c757d; }
        .btn.w-100 {
            padding: 20px; /* Increase padding for larger buttons */
            font-size: 1.2rem; /* Increase font size */
        }

    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center">Admin Panel</h4>
        <a href="assignSupervisor">Assign Supervisor</a>
        <a href="department">Add Department</a>
        <a href="faculty">Add Faculty</a>
        <a href="campus">Add Campus</a>
        <a href="admindash" class="btn btn-success mt-3">Back</a>
        <a href="adminlogin" class="btn btn-danger mt-3">Logout</a>
    </div>

    <div class="content">
        <h2 class="text-center">Admin Dashboard</h2>
        <div class="row text-center">
            <div class="col-md-3">
                <a href="assignSupervisor" class="btn btn-primary w-100">Assigned Supervisor <span id="supervisorCount" class="count-badge">(0)</span></a>
            </div>
            <div class="col-md-3">
                <a href="department" class="btn btn-info w-100">Add Department <span id="departmentCount" class="count-badge">(0)</span></a>
            </div>
            <div class="col-md-3">
                <a href="faculty" class="btn btn-warning w-100">Add Faculty <span id="facultyCount" class="count-badge">(0)</span></a>
            </div>
            <div class="col-md-3">
                <a href="campus" class="btn btn-secondary w-100">Add Campus <span id="campusCount" class="count-badge">(0)</span></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize counts (you would typically fetch these from a backend)
        let supervisorCount = 0;
        let departmentCount = 0;
        let facultyCount = 0;
        let campusCount = 0;

        // Function to update counts (call this after adding a new item)
        function updateCounts() {
            document.getElementById("supervisorCount").textContent = `(${supervisorCount})`;
            document.getElementById("departmentCount").textContent = `(${departmentCount})`;
            document.getElementById("facultyCount").textContent = `(${facultyCount})`;
            document.getElementById("campusCount").textContent = `(${campusCount})`;
        }

        // Example: Increment counts (replace with your actual logic)
        function incrementCounts(type) {
            if (type === "supervisor") {
                supervisorCount++;
            } else if (type === "department") {
                departmentCount++;
            } else if (type === "faculty") {
                facultyCount++;
            } else if (type === "campus") {
                campusCount++;
            }
            updateCounts();
        }

        // Example Usage (replace with your actual event listeners and logic):
        // Simulate adding a department
        // Example: Assuming you have a form on department.html and after successful submission you want to increment the counter.
        // After successfull submission in department.html:
        // window.opener.incrementCounts("department"); // access the function from the parent window.

        // Initial update
        updateCounts();

    </script>
</body>
</html>