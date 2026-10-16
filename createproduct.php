
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
            Product Entry

        </h2>

        <p>
welcome to course department
        </p>

        

    </div>
<center>

<p style="color:red;">PLEASE ENTER PRODUCT RECORD</p>

 <form action="createproductprocess.php" method="post">
  <label for="name">Name:</label><br>
   <input type="text" id="name" name="name"><br>
      <label for="quantity">quantity:</label><br>
  <input type="text" id="quantity" name="quantity" ><br>
    <label for="price">price:</label><br>
  <input type="text" id="price" name="price" ><br><br>
  <input type="submit" name="create" value="add" class="btn btn-primary">
  
</form> 

<P> </P>
 
</center>

</body>
</html>
