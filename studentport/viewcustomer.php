<?php

require_once "includes/auth.php";


?>
<<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Student Dashboard</title>

    <link rel="stylesheet"
          href="assets/style.css">

</head>
<div class="dashboard">

    <!-- Header -->

   <?php include "includes/header.php"; ?>      


    <!-- Welcome Section -->

    <div class="welcome-box">

        <h2>
            courses

        </h2>

        <p>
welcome to course department
        </p>

        

    </div>



<body>
 <center>

<center><h1>CUSTOMER DETAILS</h1></center>
   
 <div class="panel-body">
 <div class="table-responsive table-bordered">
   <table class="table">
      <thead>
	  
     <tr>
 <th>#</th>
 <th>Name</th>
 <th>Email</th>
 <th>Created _at</th>
<th>Action</th>
 </tr>
 </thead>
 
<tbody>

<?php
include 'config/connect.php';
$sql=mysqli_query($db_con,"select * from students");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['full_name']);?></td>
                                            <td><?php echo htmlentities($row['email']);?></td>
										<td><?php echo htmlentities($row['created_at']);?></td>
                                        
                                           <td>
                    
                    <a href="editcustomer.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="deletecustomer.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
                                            <td>
                                            
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
								</center>
								
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>
   
   
</body>
</html>

