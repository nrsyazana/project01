
<!DOCTYPE html>
<html>
<head>
<title>ADMIN PAGE</title>
<script type = "text/javascript">
    function calc()
    {
        var m1,m2,year1=0,total = 0,payment=0,balance=0;status = "";
        m1 = parseInt(document.form1.year1.value);
        m2 = parseInt(document.form1.fee.value);
       
	   
        total = m1*m2;
        year1=m1;
        if(year1==5)
        {
			payment=250;
            status="5";
        }
        else if(year1==4)
        {
				payment=200;
            status = "4";
        }
        else if(year1==3)
        {
			payment=150;
            status = "3";
        }
        else if(year1==2)
        {
				payment=100;
            status = "2";
        }
        else  if (year1==1)
        {
			payment=50;
            status = "1";
        }
		balance=payment-total;
			payment="" +payment;
			total ="" + total;
			status ="" + status ;
			balance ="" + balance;

        document.form1.status.value = status;
        document.form1.total.value = total;
		document.form1.balance.value = balance;
		document.form1.payment.value = payment;
        
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

<center><form name = "form1" method="post" action="saveupdatemaintenance.php">
<table border = "2" width="450px">

<br><br>
	<style="font-family:courier;"><h3 style="text-align:center;">MAINTENANCE FEE</h3></b><br>
<?php
include("dbase.php");
$matricURL = $_GET['matric'];

$query = "SELECT * FROM maintenance WHERE matric = '$matricURL'";

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
	$date = $row["date"];
	
	?>
	
	<tr>
	<td style="font-family:courier;">NAME	:	<input type ="text" name="name"  value="<?php echo $name; ?>"></td></tr>
	<tr><td style="font-family:courier;">DATE	:	<input type ="text" name="date"  value="<?php echo $date; ?>"></td></tr>
	<tr><td style="font-family:courier;">Paid RM	:	<input type ="text" name="fee"  value="<?php echo $fee; ?>"></td></tr>
	<tr><td style="font-family:courier;">Year	:	<input type ="text" name="year1"  value="<?php echo $year1; ?>"></td></tr>
	<tr><td style="font-family:courier;">
	<center><input type="button" onClick="calc()" Value= "Calculate Total" /><br><br>
	<tr><td style="font-family:courier;">Pay for year	:	<input type ="text" name="status"  value="<?php echo $status; ?>"></td></tr>
	<tr><td style="font-family:courier;">Overall fee is RM	:	<input type ="text" name="payment"  value="<?php echo $payment; ?>"></td></tr>
	<tr><td style="font-family:courier;">Total paid RM	:	<input type ="text" name="total"  value="<?php echo $total; ?>"></td></tr>
	<tr><td style="font-family:courier;">Balance RM	:	<input type ="text" name="balance"  value="<?php echo $balance; ?>"></td></tr>
	<tr><td style="font-family:courier;">
<input type ="hidden" name="matric" value="<?php echo $matricURL; ?>"><center>
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


</body>
</html>