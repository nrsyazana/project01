<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="reg-style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type"text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.js"></script>
</head>
<style>
body{
	background:#81D8D0;
}
.navbar-inverse{
	background:white;
	padding:8px;
	font-size:20px;
	
}
.navbar-nav{
	padding: 0 0 0 20px;
	margin-left:100px;
	
}
.navbar-right{
	margin-right:220px;
	
}
</style>

<body>
<nav class="navbar navbar-inverse">
	<div class ="container-fluid">
	<div class ="navbar-header">
	<a class ="navbar-brand" href="homepage.php"><img src="Capture.png" ></a>
	</div>
		<ul class ="nav navbar-nav">
			<li><a href="homepage.php" style ="font-family:algerian,cursive;line-height: 70px;">HOME</a></li>
			<li><a href="resident.php" style ="font-family:algerian,cursive; line-height: 70px;">RESIDENT</a></li>
			<li><a href="location.php" style ="font-family:algerian,cursive; line-height: 70px;">LOCATION</a></li>
		</ul>
	</div>
</nav>
	
</body>
<div class="header">
  	<center><h2>Login</h2></center>
</div>
  

<?php
include('readLogin.php'); // Includes Login Script
?>
	 
<form action="" method="post" >
<label>Username :</label>
<input id="name" name="username" placeholder="username" type="text"><br><br>
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>

<form action="">
  <input type="radio" name="role" value="admin">Admin<br>
  <input type="radio" name="role" value="member">Member<br>
  
  <input name="submit" type="submit" value=" Login ">
  <span><?php echo $error; ?></span>	
</form>
</body>
</html>
	  
	  



















