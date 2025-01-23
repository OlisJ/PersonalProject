<?php

include_once('config.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	

	$sql = "UPDATE customer SET name=:name, mobile=:mobile, email=:email  WHERE id=:id";
	$prep = $pdo->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->bindParam(':name', $name);
	$prep->bindParam(':mobile', $mobile);
	$prep->bindParam(':email', $email);
	

	$prep->execute();

	header("Location:dashboard.php");
}


?>