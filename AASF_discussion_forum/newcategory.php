<!DOCTYPE html>
<html>
<head>
	<title>New Category</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<nav>
		<div class="nav_container">
			<nav>
				<a href="home.html"><img src="Logo1.png" id="logo1"></a>
				<button><a href="home.html">HOME</a></button>
				<button><a href="#">DISQS</a></button>
				<button><a href="Profile.php">PROFILE</a></button>
    			<button><a href="our_team.html">OUR TEAM</a></button>
    			<button><a href="Logout.php">LOGOUT</a></button>
			</nav>
		</div>
	</nav>

<br><br><br><br>
<h1>Add Your New category</h1>
	<form method="POST" action="addcategory.php">
		<p>Category Title</p>
		<input type="text" name="catgory_title">
		<br>
		<input type="submit" name="submit" value="Add Category">
	</form>
</body>
</html>