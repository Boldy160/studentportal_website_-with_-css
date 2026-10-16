<?php

require_once "includes/auth.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Customers Dashboard</title>

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
            Customer Entry

        </h2>

        <p>
welcome to customer department
        </p>

        

    </div>
<center>

<p style="color:red;">PLEASE ENTER CUSTOMER RECORD</p>

 <form action="createcustomerprocess.php" method="post">
  <label for="name">Name:</label><br>
   <input type="text" id="name" name="name"><br>
      <label for="phone"><br>Phone:</label><br>
  <input type="text" id="phone" name="phone" ><br>
  <input type="submit" name="create" value="add" class="btn btn-primary">
  
</form> 

<P> </P>
 
</center>

</body>
</html>
