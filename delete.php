<?php 

include_once("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM customer WHERE id=:id";

$getUsers = $pdo->prepare($sql);

$getUsers->bindParam(':id', $id);

$getUsers->execute();

header('Location:dashboard.php');

	
?>