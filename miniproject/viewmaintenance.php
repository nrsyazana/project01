<!DOCTYPE html>
<html>
<head>
<title>ADMIN PAGE</title>
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
		<a class ="navbar-brand" href="adminHome.php"><img src="Capture.png" ></a>
		</div>
		<ul class ="nav navbar-nav">
		<li><a href="memberinfoadmin.php" style ="font-family:algerian,cursive;line-height: 70px;">MEMBER INFO</a></li>
			<li><a href="viewmaintenance.php" style ="font-family:algerian,cursive; line-height: 70px;">MAINTENANCE FEE</a></li>
			<li><a href="viewfinancial.php" style ="font-family:algerian,cursive; line-height: 70px;">FINANCE</a></li>
			<li><a href="e-advert.php" style ="font-family:algerian,cursive; line-height: 70px;">E-ADVERTISEMENT</a></li>
			<li><a href="homepage.php" style ="font-family:algerian,cursive; line-height: 70px;">LOGOUT</a></li>
		</ul>
		
	</div>
</nav>

<center><form method="post" action="viewmaintenance.php">
<table border = "2" width="450px">

<br><br>
	<style="font-family:courier;"><h3 style="text-align:center;">MAINTENANCE FEE</h3></b><br>
<?php
include("dbase.php");

$query = "SELECT * FROM maintenance";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    $year1 = $row["year1"];
	$fee = $row["fee"];
	$payment = $row["payment"];
	$total = $row["total"];
	$status = $row["status"];
	$balance = $row["balance"];
	$name = $row["name"];
	$matric = $row["matric"];
	$date = $row["date"];
	
	?>
	
	<tr>
	<th style="font-family:courier;"><center>NAME : <?php echo $name; ?>
	<br style="font-family:courier;">MATRIC : <?php echo $matric;?> 
	<br style="font-family:courier;">DATE : <?php echo $date; ?>
	<br style="font-family:courier;">Paid RM  <?php echo $fee;?>
	<br style="font-family:courier;">Pay for year : <?php echo $status; ?>
	<br style="font-family:courier;">Overall fee is RM : <?php echo $payment;?>
	<br style="font-family:courier;">Total paid RM : <?php echo $total; ?>
	<br style="font-family:courier;">Balance RM : <?php echo $balance; ?>
	
	
  <br style="font-family:courier;">
	<a href="updatemaintenance.php?matric=<?php echo $matric; ?>">Update</a> | <a href="maintenance.php?matric=<?php echo $matric; ?>">Add</a><br>
    
	</th>
	
	</tr>
	

	
	<?php
    }
} else {
    echo "0 results";

}

?>

</table>
<br><br>
<hr>

</body>
</html>