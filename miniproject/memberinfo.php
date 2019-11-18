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
<center><form method="post" action="memberinfo.php">
 <br><br>
	<caption style="font-family:courier;"><h3  style="text-align:center;">MEMBER INFORMATION</h3></b><br>
	<table border="2" width="40%">


<?php
include("dbase.php");

$query = "SELECT * FROM register";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
   
	$name = $row["name"];
	$matric = $row["matric"];
	$address = $row["address"];
	$faculty = $row["faculty"];
	$gender = $row["gender"];
	$phone = $row["phone"];
	$email = $row["email"];
	
	?>
	
 
	<tr>
	
	<th style="font-family:courier;"><center>Nama : <?php echo $name;?> 
	<br style="font-family:courier;">Matric Number : <?php echo $matric; ?>
	<br style="font-family:courier;">Resident Address : <?php echo nl2br($address); ?>
	<br style="font-family:courier;">Faculty : <?php echo $faculty; ?>
	<br style="font-family:courier;">Gender : <?php echo $gender; ?>
	<br style="font-family:courier;">Mobile Phone : <?php echo $phone; ?>
	<br style="font-family:courier;">Email Address : <?php echo $email; ?>
	
  
    
	</th>
	
	</tr>
	

	
	<?php
    }
} else {
    echo "0 results";

}

?>

</table>

	</section>
	<br>


</body>
</html>