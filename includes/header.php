<div class="dashboard-header">

        <div>
            <h1>Student</h1>
            <p>Dashboard</p>
        </div>
		
  <div>
			<a href="dashboard.php">Home</a>
			<a href="viewteacher.php">Teacher</a>
			<a href="viewusers.php">Student</a>
				<a href="viewadmin.php">Admin
					<a href="viewprofile.php">Profile
							<a href="viewparents.php">Parents
								<a href="viewcourses.php">Courses
			        </div>
					 <div>
			<?php
            echo htmlspecialchars($_SESSION["student_name"]);
            ?>
			
        <a href="logout.php" class="logout-button">
            Logout
        </a>
</div>
    </div>