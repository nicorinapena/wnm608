<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>
	
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
			<h1>Admin Page</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

<body>

	<div class="container">
	<nav class="nav nav-crumbs">
	<ul>
	<li><a href="admin/users.php">Back</a></li>
	</ul>
	</nav>
	<h3>Edit Profile</h3>
		<div class="card soft" id="controls">
		
		<form>
			<div class="form-control">
				<label class="form-label">Name</label>
				<input type="text" placeholder="First Name" class="form-input">
			</div>

			<div class="form-control">
				<label class="form-label">Occupation</label>
				<input type="text" placeholder="Occupation" class="form-input">
			</div>

			<div class="form-control">
			<label class="form-label">Email</label>
				<input type="Email" placeholder="Email" class="form-input">
			</div>

			<div class="form-control">
			<label class="form-label">Phone Number</label>
				<input type="number" placeholder="Phone Number" class="form-input">
			</div>

		</form>

		<div>

		<a href='admin/users.php?id=$i'>
		<div class="card soft">Save
		<script>makeNav('nav nav-pills')</script>
		</div></a>
	
		</div>


	</div>


</body>
</html>