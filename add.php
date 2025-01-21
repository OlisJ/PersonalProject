<?php

	include_once('config.php');

	if(isset($_POST['submit']))
	{

        $name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		


			$sql = "INSERT INTO customer(name,mobile,email) VALUES  :name, :mobile, :email)";

			$insertSql = $pdo->prepare($sql);

			
			$insertSql->bindParam(':name', $name);
			$insertSql->bindParam(':mobile', $mobile);
			$insertSql->bindParam(':email', $email);

			$insertSql->execute();

			echo "The user has been added successfully";

			echo "<br>";

			echo "<a href='dashboard.php'>Dashboard</a>";

	}


?>