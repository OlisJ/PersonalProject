<?php

	include_once('config.php');

	if(isset($_POST['submit']))
	{

        $name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		


			$sql = "INSERT INTO customer(name,mobile,email) VALUES (:name, :mobile, :email)";

			$insertsql = $pdo->prepare($sql);
			
			$insertsql->bindParam(':name',$name);
			$insertsql->bindParam(':mobile',$mobile);
			$insertsql->bindParam(':email',$email);

			$insertsql->execute();

			echo "The reservation has been made sucessfully";

			echo "<br>";

			echo "<a href='dashboard.php'>Dashboard</a>";

	}


?>