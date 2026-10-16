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





<body>
 <center>

<center><h1>STAFF DETAILS</h1></center>
   
 <div class="panel-body">
 <div class="table-responsive table-bordered">
   <table class="table">
      <thead>
	  
	  
     <tr>
 <th>#</th>
 <th>Name</th>
 <th>quantity </th>
  <th>price </th>
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
                    
                    <a href="editstaff.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="deletestaff.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
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

