<?php

	include_once('config.php');

	if(isset($_POST['submit']))
	{

        $name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		


			$sql = "INSERT INTO users(name,email,password) VALUES (:name,:email,:password)";

			$insertsql = $pdo->prepare($sql);
			
			$insertsql->bindParam(':name',$name);
			$insertsql->bindParam(':email',$email);
			$insertsql->bindParam(':password',$password);

			$insertsql->execute();

			echo "Registration has been made succesfully";

			echo "<br>";

			echo "<a href='signin.php'>Log In</a>";

	}


?>