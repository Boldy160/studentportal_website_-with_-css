<?php
if (isset($_GET['id'])) {
include 'config/database.php';
$id = $_GET['id'];
  $stmt = $pdo->prepare ("DELETE FROM parents WHERE id='$id'");
  $stmt->execute();
   $stmt = $stmt->fetchAll();

	header("Location:viewparents.php");

}
?>