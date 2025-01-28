<?php 

include_once("config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM customer WHERE id=:id";

$prep = $pdo->prepare($sql);

$prep->bindParam(':id', $id);

$prep->execute();

$data = $prep->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
	<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="main.css">

	<style>

		form>input {
		    margin-bottom: 10px;
		    font-size: 20px;
		    padding: 5px;
		}

		button {
		    background: none;
		    border: none;
		    border: 1px solid black;
		    padding: 10px 40px;
		    font-size: 20px;
		    cursor: pointer;
			margin-left:100px;
		}
		a{
			margin-left:47%;
		}
	</style>
</head>
<body>
	
	<form action="update.php" class='form-signin' method="POST">
		<h1 class='h3 mb-3 font-weight-normal mb-6'>Update Reservation</h1>
	<input class="form-control sr=only" type="number" name="id"  value="<?php echo $data['id']?>" readonly><br>
    <input class="form-control sr=only" type="text" name="name" value="<?php echo $data['name']?>"><br>
    <input class="form-control sr=only" type="text" name="mobile" value="<?php echo $data['mobile']?>"><br>
    <input class="form-control sr=only" type="email" name="email" value="<?php echo $data['email']?>"><br>

		<br><br>
		<button type="submit" name="update" class="btn btn-primary" >UPDATE</button>
       
	</form>
    <a href="dashboard.php">Dashboard</a>
	</body>
</html>