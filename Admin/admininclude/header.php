<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootststrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome css -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- custoem css -->
    <link rel="stylesheet" href="../css/adminstyle.css">
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixec-top p-0 shadow" style="background-color: #225470;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">E-Learning <small class="text-white">Admin Area</small></a>

    </nav>

    <!-- side bar -->
    <div class="container-fluid mb-5" style="margin-top: 40px;">
    <div class="row">
        <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="adminDashboard.php">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="courses.php" >
                            <i class="fab fa-accessible-icon"></i>
                            Courses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="lessons.php" class="nav-link">
                            <i class="fab fa-accessible-icon"></i>
                            Lessons
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="students.php" class="nav-link">
                            <i class="fas fa-users"></i>
                            Students
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-table"></i>
                            Sell Report
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-table"></i>
                            Payment Status
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="feedback.php" class="nav-link">
                            <i class="fab fa-accessible-icon"></i>
                            Feedback
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="adminChangePass.php" class="nav-link">
                            <i class="fas fa-key"></i>
                            Change Password
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../logout.php" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>


        </nav>