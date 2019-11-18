<!DOCTYPE html>
<html>
<head>
<title>Member Advertisement</title>

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
	<a class ="navbar-brand" href="memberHome.php"><img src="Capture.png" ></a>
	</div>
		<ul class ="nav navbar-nav">
			<li><a href="registermember.php" style ="font-family:algerian,cursive; line-height: 70px;">REGISTER MEMBER</a></li>
			<li><a href="memberinfo.php" style ="font-family:algerian,cursive; line-height: 70px;">MEMBER INFO</a></li>
			<li><a href="e-advertmember.php" style ="font-family:algerian,cursive; line-height: 70px;">E-ADVERTISEMENT</a></li>
			<li><a href="homepage.php" style ="font-family:algerian,cursive; line-height: 70px;">LOGOUT</a></li>
		</ul>
	</div>
</nav>

<!-- Interface of insert data. -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device=width,initial-scale-1.0"/>
<title>e-Advertisement</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
 <center><form method="post" action="readAdvertmember.php">
 
	<br><br><h3><b style="font-family:raavi;"><center style="font-size:120%;">e-Advertisement</center></br>
<table border="2" width="60%">
<br>

<tr>
  <td style="font-family:raavi;">Title:</td>
  <td><input type="text" name="title"><br></td>
</tr>

<tr>
<td style="font-family:raavi;">Message:</td>
<td><textarea name = "message" rows = "5" cols = "50"></textarea></td>
</tr>

<tr> 
<td style="font-family:raavi;">Advertisement View:</td>
<td>
<input type="radio" name="day" value="1day">1  Day
<input type="radio" name="day" value="2day">2  Day
<input type="radio" name="day" value="3day">3  Day
</td>
 
<tr><td><td><input type="submit" name="submit" value="Save">
<input type="reset" value="Reset"></td></td>
</tr>
</tr>
</table>

</form>
</div>
</section>

</body>
</html>