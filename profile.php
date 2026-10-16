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
            profile

        </h2>

        <p>
welcome to student profile
        </p>

        

    </div>


<div class="container">

    <h1>profile details</h1>

    <form action="createresultsprocess.php" method="post">
  <label for="subjects">Subjects:</label><br>
   <input type="text" id="name" name="name"><br>
      <label for="score">Score:</label><br>
  <input type="text" id="address" name="address" ><br>
   <label for="grade">Grade:</label><br>
   <input type="text" id="price" name="price" ><br><br>
   
   
  <button type="submit">
            Login
        </button>
  
</form> 

 

 




</div>
    <!-- Footer -->

  

</body>

</html>