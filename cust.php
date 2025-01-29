<?php

	include_once('config.php');

	if(isset($_POST['submit']))
	{

        $name = $_POST['name'];
		$mobile=$_POST['mobile'];
        $email = $_POST['email'];
        $credit=$_POST['credit'];
        $date=$_POST['date'];        
		
		


			$sql = "INSERT INTO customer(name,mobile ,email,credit , date) VALUES (:name,:mobile,:email,:credit,:date)";

			$insertsql = $pdo->prepare($sql);
			
			$insertsql->bindParam(':name',$name);
            $insertsql->bindParam(':mobile',$mobile);
			$insertsql->bindParam(':email',$email);
			$insertsql->bindParam(':credit',$credit);
            $insertsql->bindParam(':date',$date);
			$insertsql->execute();

			echo "Reservation has been made succesfully";

			echo "<br>";

			echo "<a href='index.html'>Home</a>";

	}


?>