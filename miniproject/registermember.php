<!DOCTYPE html>
<html>
<head>
<title>MEMBER PAGE</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
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
<center><form method="post" action="savereg.php">
 <br><br>
	<style="font-family:courier;"><h3 style="text-align:center;">REGISTER NEW MEMBER</h3></b><br>
<table border="2" width="60%">

 <tr>
  <td style="font-family:courier;">Username:</td>
  <td><input type="text" name="username"><br></td>
  </tr>
  <tr>
  <td style="font-family:courier;">Password:</td>
  <td><input type="password" name="password"><br></td>
  
  <tr>
  <td style="font-family:courier;">Confirm Password:</td>
  <td><input type="password" name="confirm"><br></td>
  

<tr>
  <td style="font-family:courier;">Name:</td>
  <td><input type="text" name="name"><br></td>
  </tr>
  <tr>
  <td style="font-family:courier;">Matric Number:</td>
  <td><input type="text" name="matric"><br></td>
  </tr>
  <tr>
   <td style="font-family:courier;">Residential Address:</td>
  <td><select name = "address">
  <option style="font-family:courier;" selected = "selected;">GAMBANG DAMAI RESIDENT</option>
  <option style="font-family:courier;">TAMAN MAKMUR KG FAJAR RESIDENT</option>
 
  </select><br></td>
  </tr>
  <tr>
  <td style="font-family:courier;">Faculty:</td>
  <td><select name = "faculty">
  <option style="font-family:courier;" selected = "selected;">FSKKP</option>
  <option style="font-family:courier;">FIM</option>
  <option style="font-family:courier;">FIST</option>
  <option style="font-family:courier;">FTEK</option>
  <option style="font-family:courier;">FKEE</option>
  </select><br></td>
  </tr>
  <tr>
  <td style="font-family:courier;">Gender:</td>
  <td style="font-family:courier;"><input type="radio" name="gender" value="MALE">Male
		<input type="radio" name="gender" value="FEMALE">Female<br></td>
  </tr>
  <tr>
  <td style="font-family:courier;">Mobile Phone:</td>
  <td><input type="text" name="phone"><br></td>
  </tr>
  <tr>
  <td style="font-family:courier;">Email Address:</td>
  <td><input type="text" name="email"><br></td>
 
  
  
<tr><td><td><input type="submit" value="Register">
<input type="reset" value="Cancel"></td></td>
</tr>
</tr>
</table>

</form>
</div>
	</section><br>
	

</body>
</html>