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

<center><form method="post" action="viewfinancial.php">
<table border = "2" width="450px">

<br><br>
	<style="font-family:courier;"><h3 style="text-align:center;">FINANCIAL</h3></b><br>
<?php
include("dbase.php");

$query = "SELECT * FROM financial";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    $id = $row["id"];
	$date = $row["date"];
	$total_fee = $row["total_fee"];
	$expenses = $row["expenses"];
	$cash = $row["cash"];
	$finance = $row["finance"];
	$yearly = $row["yearly"];
	$monthly = $row["monthly"];
	
	
	?>
	
	<tr>
	<th style="font-family:courier;"><center>REPORT ID : <?php echo $id; ?>
	<br style="font-family:courier;">DATE : <?php echo $date; ?>
	<br style="font-family:courier;">Total fee member paid is RM  <?php echo $total_fee;?>
	<br style="font-family:courier;">Expenses used for maintenance fix is RM : <?php echo $expenses; ?>
	<br style="font-family:courier;">Cash donation from campus is RM : <?php echo $cash;?>
	<br style="font-family:courier;">Total financial is RM : <?php echo $finance; ?>
	<br style="font-family:courier;">Total financial yearly is RM : <?php echo $yearly; ?>
	<br style="font-family:courier;">Total financial monthly is RM : <?php echo $monthly; ?>
	
  <br style="font-family:courier;">
	<a href="updatefinancial.php?id=<?php echo $id; ?>">Update</a> | <a href="financial.php?id=<?php echo $id; ?>">Add</a><br>
    
	</th>
	
	</tr>
	

	
	<?php
    }
} else {
    echo "0 results";

}

?>

</table>
<br>
<br>
<hr>

</body>
</html>