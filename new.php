
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
			margin-left:25%;
		}
	</style>
</head>
<body>
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$stmt = $conn->prepare($sql);
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";                           
    $stmt->bind_param('sss', $name, $email, $password);

     if ($stmt->execute()) {
    	echo "<div class='alert alert-success'>Registration successful! <a href='signin.php'>Sign in here</a>.</div>";
        } else {
          echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";    
		     }
         }
             ?>
	<form class='form-signin' action="add.php" method="POST">
		<div class='mb-3'>
			<h1 class='h3 mb-3 font-weight-normal mb-6'>Sign Up</h1>
		<input class="form-control sr=only" type="text" name="name" placeholder="Name"><br>
        <input class="form-control sr=only" type="email" name="email" placeholder="Email"><br>
		<input class="form-control sr=only" type="password" name="password" placeholder="Password"><br><br>
		<button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
		</div>
        <p>Already have an account? <a href="signin.php">Sign In</a></p>
	</form>



	<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>