<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>
	<link rel="stylesheet" href="bootstrap.css">

	<style>
		#addcust{
			text-decoration:none;
			color:white;
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
	   <nav class="navbar fixed-top" style="background-color: #87CEEB;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LuxuriousLodge Resort</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" style="background-color: #87CEEB;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">LuxuriousLodge Resort</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href='index.html'>Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Customers</a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </nav>
	  
	  <br>
	  <br>


	 <table class="table table-striped table-hover table-bordered">
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Mobile</th>
				<th>Email</th>
				<th>Credit Card</th>
				<th>Date</th>
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
				<td> <?= $user['credit']  ?> </td>
				<td> <?= $user['date']  ?> </td>
				<td> <?= "<a href='delete.php?id=$user[id]'> Delete</a>| <a href='edit.php?id=$user[id]'> Update </a>"?></td>

			</tr>
	<?php
		}
	?>
		
	 </table>

	







	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	
</body>
</html>