<!DOCTYPE html>
<html>
<head>
<title>ADMIN PAGE</title>
<script type = "text/javascript">
    function calc()
    {
        var m1,m2,m3,finance=0,yearly = 0,monthly=0;
        m1 = parseInt(document.form1.total_fee.value);
        m2 = parseInt(document.form1.cash.value);
		m3 = parseInt(document.form1.expenses.value);
       
	   
        finance = (m1+m2)-m3;
		yearly=finance*12*30;
		monthly=finance*30;
			finance="" +finance;
			yearly ="" + yearly;
			monthly ="" + monthly ;
			

        document.form1.finance.value = finance;
        document.form1.yearly.value = yearly;
		document.form1.monthly.value = monthly;
		
        
    }
</script>
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

<center><form name = "form1" method="post" action="saveupdatefinancial.php">
<table border = "2" width="450px">

<br><br>
	<style="font-family:courier;"><h3 style="text-align:center;">FINANCIAL</h3></b><br>
<?php
include("dbase.php");
$idURL = $_GET['id'];

$query = "SELECT * FROM financial WHERE id = '$idURL'";

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
	<td style="font-family:courier;">REPORT ID :	<input type ="text" name="id"  value="<?php echo $id; ?>"></td></tr>
	<tr><td style="font-family:courier;">DATE	:	<input type ="text" name="date"  value="<?php echo $date; ?>"></td></tr>
	<tr><td style="font-family:courier;">Total fee member paid is RM	<input type ="text" name="total_fee"  value="<?php echo $total_fee; ?>"></td></tr>
	<tr><td style="font-family:courier;">Expenses used for maintenance fix is RM :	<input type ="text" name="expenses"  value="<?php echo $expenses; ?>"></td></tr>
	<tr><td style="font-family:courier;">Cash donation from campus is RM :	<input type ="text" name="cash"  value="<?php echo $cash; ?>"></td></tr>
	<tr><td style="font-family:courier;">
	<center><input type="button" onClick="calc()" Value= "Calculate Total" /><br><br>
	<tr><td style="font-family:courier;">Total financial is RM :	<input type ="text" name="finance"  value="<?php echo $finance; ?>"></td></tr>
	<tr><td style="font-family:courier;">Total financial yearly is RM :	<input type ="text" name="yearly"  value="<?php echo $yearly; ?>"></td></tr>
	<tr><td style="font-family:courier;">Total financial monthly is RM :	<input type ="text" name="monthly"  value="<?php echo $monthly; ?>"></td></tr>
	<tr><td style="font-family:courier;">
<input type ="hidden" name="id" value="<?php echo $idURL; ?>"><center>
<input type ="submit" value="Submit">
<input type ="reset" value="Reset"></td></tr>
	
    
	</th>
	
	</tr>
	

	
	<?php
    }
} else {
    echo "0 results";

}

?>

</table>
<hr>

</body>
</html>