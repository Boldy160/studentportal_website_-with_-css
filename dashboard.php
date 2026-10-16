<?php

require_once "includes/auth.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Student Dashboard</title>

    <link rel="stylesheet"
          href="assets/style.css">

</head>

<body>

<div class="dashboard">

    <!-- Header -->

   <?php include "includes/header.php"; ?>      


    <!-- Welcome Section -->

    <div class="welcome-box">

        <h2>
            Welcome,
            <?php
            echo htmlspecialchars($_SESSION["student_name"]);
            ?>
        </h2>

        <p>
            You are successfully logged into your student account.
        </p>

        <p>
            <strong>Email:</strong>
            <?php
            echo htmlspecialchars($_SESSION["student_email"]);
            ?>
        </p>

    </div>


    <!-- Dashboard Cards -->

    <div class="dashboard-grid">

        <div class="dashboard-card">

            <h3>My Profile</h3>

            <p>
                View your student profile and account information.
            </p>

            <a href="viewprofile.php">
                View Profile
            </a>

        </div>


        <div class="dashboard-card">

            <h3>My Courses</h3>

            <p>
                View your courses and learning materials.
            </p>

            <a href="viewcourses.php">
                View Courses
            </a>

        </div>


        <div class="dashboard-card">

            <h3>Parents Info</h3>

            <p>
                Manage your student account settings.
            </p>

            <a href="viewparents.php">
                parents
            </a>
			</div>
			 <div class="dashboard-card">

            <h3>Student details</h3>

            <p>
                Manage your student information.
            </p>

            <a href="viewusers.php">
                student  info
            </a>

        </div>
		<div class="dashboard-card">

            <h3>Teacher info</h3>

            <p>
                Manage your student account settings.
            </p>

            <a href="viewteacher.php">
                teacher
            </a>

        </div>
		<div class="dashboard-card">

            <h3>Admin info</h3>

            <p>
                Manage your student account settings.
            </p>

            <a href="viewadmin.php">
                Admin
            </a>

        </div>
	
		   </div>

  
   
    <!-- Footer -->

   <?php include "includes/footer.php"; ?>   

</body>

</html>