<?php

require_once "includes/auth.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title>Student Dashboard</title>

    <link rel="stylesheet"
          href="assets/style.css">
</head>

<body>


   <?php include "includes/header.php"; ?>      


    <div class="container">
        <div class="row">
            <h2>Student details</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Student Name</th>
                        <th>Email</th>
						  <th>Created_at</th>
						  <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include 'config/database.php';
                        $a=1;
                        $stmt = $pdo->prepare(
                                "SELECT * FROM students");
                        $stmt->execute();
                        $users = $stmt->fetchAll();
                        foreach($users as $user)
                        {
                    ?>
                    <tr>
                        <td>
                            <?php echo $user['id']; ?>
                        </td>
                        <td>
                            <?php echo $user['full_name']; ?>
                        </td>
						<td>
                            <?php echo $user['email']; ?>
                        </td>
						<td>
						<?php echo $user['created_at'];?>
						</td>

                                           <td>
                    
                    <a href="editcustomer.php?id=<?php echo $user['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="deleteusers.php?id=<?php echo $user['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
                           
                        
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
			<br>

            <input class="btn btn-primary"
                    type="submit" value="Submit">
        </div>
    </div>
	   <?php include "includes/footer.php"; ?> 
</body>

</html>