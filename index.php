<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <!-- Include Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS for Styling -->
    <style>
        /* Custom Styling */
        body {
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #007bff; /* Change the background color */
        }
        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff; /* Change the color of the hamburger icon */
        }
        .navbar-dark .navbar-toggler:focus, .navbar-dark .navbar-toggler:hover {
            background-color: #0056b3; /* Change the color of the hamburger icon on hover/focus */
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff; /* Change the color of the navbar links */
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #ffffff; /* Change the color of the navbar links on hover */
        }
        .main {
            background-color: #ffffff; /* Change the background color of the main content */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
        }
        .copyright {
            background-color: #007bff; /* Change the background color of the copyright section */
            color: #ffffff; /* Change the text color of the copyright section */
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Authentication System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="main">
            <h2 class="text-center">Welcome to our Library</h2>
            <!-- Your content here -->
        </div>
    </div>

    <div class="copyright mt-5">
        <p>&copy; Nahin Ahmed. All Rights Reserved.</p>
    </div>
</div>

<!-- Include Bootstrap 5 JavaScript (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
