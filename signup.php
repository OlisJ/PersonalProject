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
		p{
			margin-left:25px
		}
	</style>
</head>
<body>
	
	<form class='form-signin' action="add.php" method="POST">
		<div class='mb-3'>
			<h1 class='h3 mb-3 font-weight-normal mb-6'>Sign Up</h1>
		<input class="form-control sr=only" type="text" name="name" placeholder="Name" required><br>
		<input class="form-control sr=only" type="number" name="mobile" placeholder="Mobile" required><br>
        <input class="form-control sr=only" type="email" name="email" placeholder="Email" required><br>
		<input type="password" class='form-control sr=only' name='password' placeholder='Password' required><br><br>

		<button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
		</div>
        <p>Already have an account? <a href="signin.php">Sign In</a></p>
	</form>



	<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>