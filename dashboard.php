<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		
		table
		{
			border: 1px solid black;
		}

		tr,td,th
		{
			border: 1px solid black;
			
		}
		table,tr,td
		{
			border-collapse: collapse;
		}
		td
		{
			padding: 10px;
		}

	</style>
</head>
<body>


	<?php 

		include_once('config.php');

		$getCust = $pdo->prepare("SELECT * FROM customer");

		$getCust->execute();

		$users = $getCust->fetchAll();

	 ?>


	 <table>
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Mobile</th>
				<th>Email</th>
				<th>Update</th>
			</tr>
	</thead>


	 	<?php 

	 		foreach ($users as $user ) {
			
		?>
			<tr> 
				<td> <?= $user['id'] ?> </td>
				<td> <?= $user['name']  ?> </td> 
				<td> <?= $user['mobile']  ?> </td> 
				<td> <?= $user['email']  ?> </td>
				<td> <?= "<a href='delete.php?id=$user[id]'> Delete</a>| <a href='edit.php?id=$user[id]'> Update </a>"?></td>

			</tr>
	<?php
		}
	?>
		
	


	 </table>

	 <a href="index.php">Add Customer</a>
	
</body>
</html>