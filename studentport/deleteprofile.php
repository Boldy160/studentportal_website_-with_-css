<?php
if (isset($_GET['id'])) {
include 'config/database.php';
$id = $_GET['id'];
  $stmt = $pdo->prepare ("DELETE FROM profile WHERE id='$id'");
  $stmt->execute();
   $stmt = $stmt->fetchAll();

	header("Location:viewprofile.php");

}
?>