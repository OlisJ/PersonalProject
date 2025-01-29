<?php

include_once('config.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$credit=$_POST['credit'];
	$date=$_POST['date'];
	

	$sql = "UPDATE customer SET name=:name, mobile=:mobile, email=:email , credit=:credit, date=:date WHERE id=:id";
	$prep = $pdo->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->bindParam(':name', $name);
	$prep->bindParam(':mobile', $mobile);
	$prep->bindParam(':email', $email);
	$prep->bindParam(':credit' , $credit);
	$prep->bindParam(':date' , $date);
	

	$prep->execute();

	header("Location:dashboard.php");
}


?>