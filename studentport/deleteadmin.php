<?php
if (isset($_GET['id'])) {
include 'config/database.php';
$id = $_GET['id'];
  $stmt = $pdo->prepare ("DELETE FROM admin WHERE id='$id'");
  $stmt->execute();
   $ustmt = $stmt->fetchAll();

	header("Location:viewadmin.php");

}
?>