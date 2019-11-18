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
<center><form name = "form1" method="post" action="savemaintenance.php">
 <br><br>
	<style="font-family:courier;"><h3 style="text-align:center;">MAINTENANCE FEE</h3></b><br>
<table border = "2" width="450px">
		
                <td><center>CONTENT</td><td><center>INFO</td><td><center>INPUT</td>
            </tr>
			  <tr>
                <td><center>NAME</td>
				<td><center>FULL NAME</td>
                <td><center><input type = "text" name = "name" /></td>
            </tr>
			 <tr>
                <td><center>MATRIC NUMBER</td>
				<td><center>CONSIST OF 7 LETTERS</td>
                <td><center><input type = "text" name = "matric" /></td>
            </tr>
            <tr>
                <td><center>YEAR</td>
				<td><center>YEAR 1 - YEAR 5</td>
                <td><center><input type = "text" name = "year1" /></td>
            </tr>
            <tr>
                <td><center>FEE</td>
				<td><center>RM50 YEARLY</td>
                <td><center><input type = "text" name = "fee" /></td>
            </tr>
			 <tr>
                <td><center>DATE OF PAYMENT</td>
				<td><center>EG:2018/02/10</td>
                <td><center><input type = "text" name = "date" /></td>
            </tr>
           
</table>
<br>
		<center><input type="button" onClick="calc()" Value= "Calculate Total" /><br><br>
                    <br>
			<tr>
			<th>Total maintenance fee should be pay is RM	<input type ="text" name = "payment" 	/><br><br>
			<br>Paid for maintenance fee is RM	<input type ="text" name = "total" 	/><br><br>
			<br>Pay for year	<input type ="text" name = "status" 	/><br><br>
			<br>Your balance maintenance fee is RM	<input type ="text" name = "balance" 	/>
</th>
<br><br><br>
<tr><td><td><input type="submit" value="Add">
<input type="reset" value="Cancel"></td></td>
</tr>
			</tr>
			<br><br>
			</form>
</div>
	</section><br>
	

</body>
</html>