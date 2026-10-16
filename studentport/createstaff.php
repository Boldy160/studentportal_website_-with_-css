<?php

require_once "includes/auth.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Staffs Dashboard</title>

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
            Product Entry

        </h2>

        <p>
welcome to staffs department
        </p>

        

    </div>
<center>

<html>
<head>
<title>staff information</title>


<p style="color:red;">PLEASE ENTER STAFF RECORD</p>

 <form action="createstaffprocess.php" method="post">
  <label for="name">Name:</label><br>
   <input type="text" id="name" name="name"><br>
      <label for="position"><br>position:</label><br>
  <input type="text" id="position" name="position" ><br><br>
<label for="phone">phone:</label><br>
  <input type="text" id="phone" name="phone" ><br><br>
  <input type="submit" name="create" value="add" class="btn btn-primary">
  
</form> 

<P> </P>

</center>

</body>
</html>
