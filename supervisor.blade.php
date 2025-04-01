<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .content {
            padding: 20px;
        }
        .student-item {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            cursor: pointer;
        }
        .student-item.active {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="sidebar-sticky">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Assigned Students</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item student-item">
                            <a href="?student=studentA">Student A</a>
                        </li>
                        <li class="nav-item student-item">
                            <a href="?student=studentB">Student B</a>
                        </li>
                        <li class="nav-item student-item">
                            <a href="?student=studentC">Student C</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 content">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">
                        <?php
                            if (isset($_GET['student'])) {
                                echo ucfirst($_GET['student']);
                            } else {
                                echo "Student Details";
                            }
                        ?>
                    </h1>
                </div>
                <div>
                    <?php
                        if (isset($_GET['student'])) {
                            // Replace with your actual student data retrieval logic
                            $student = $_GET['student'];
                            echo "<p>Details for " . ucfirst($student) . " will appear here.</p>";
                            echo "<p>Project: Placeholder project data</p>"; //example project data.

                            echo "<div id='studentInteraction'>";
                            echo "<h3>Interaction</h3>";
                            echo "<form method='post' action=''>";
                            echo "<textarea class='form-control' name='message' rows='4'></textarea>";
                            echo "<button class='btn btn-primary mt-2' type='submit'>Send Message</button>";
                            echo "</form>";

                            echo "<div class='mt-3'>";
                            echo "<h3>Interaction History</h3>";
                            echo "<ul class='list-group'>";
                            // Simulated history. Replace with database query results
                            echo "<li class='list-group-item'><b>Supervisor:</b> Message 1</li>";
                            echo "<li class='list-group-item'><b>Student:</b> Reply 1</li>";
                            echo "</ul>";
                            echo "</div>";
                            echo "</div>";

                        } else {
                            echo "<p>Click on a student to view details.</p>";
                        }

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $message = $_POST["message"];
                            if (isset($_GET['student']) && !empty($message)) {
                                // Here, you would implement the PHP logic to save the message
                                // to a database or file, associating it with the student.
                                echo "<p class='mt-3'>Message sent: " . htmlspecialchars($message) . "</p>";
                                //Also add to interaction history above.
                            }
                        }
                    ?>
                </div>

            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr"></script>