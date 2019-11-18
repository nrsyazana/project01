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
<center><form name = "form1" method="post" action="savefinancial.php">
 <br><br>
	<style="font-family:courier;"><h3 style="text-align:center;">FINANCIAL</h3></b><br>
<table border = "2" width="450px">
		
                <td><center>CONTENT</td><td><center>INFO</td><td><center>INPUT</td>
            </tr>
			 <tr>
                <td><center>REPORT ID</td>
				<td><center>EG:1</td>
                <td><center><input type = "text" name = "id" /></td>
            </tr>
			  <tr>
                <td><center>DATE OF REPORT</td>
				<td><center>EG:2018/02/10</td>
                <td><center><input type = "text" name = "date" /></td>
            </tr>
			
            <tr>
                <td><center>TOTAL FEE</td>
				<td><center>MEMBER PAID</td>
                <td><center><input type = "text" name = "total_fee" /></td>
            </tr>
            <tr>
                <td><center>CASH</td>
				<td><center>CAMPUS DONATION</td>
                <td><center><input type = "text" name = "cash" /></td>
            </tr>
			 <tr>
                <td><center>EXPENSES</td>
				<td><center>MAINTENANCE FIX</td>
                <td><center><input type = "text" name = "expenses" /></td>
            </tr>
           
</table>
<br>
		<center><input type="button" onClick="calc()" Value= "Calculate Total" /><br><br>
                    <br>
			<tr>
			<th>Total financial is RM	<input type ="text" name = "finance" 	/><br><br>
			<br>Total financial yearly is RM	<input type ="text" name = "yearly" 	/><br><br>
			<br>Total finance monthly is RM	<input type ="text" name = "monthly" 	/><br><br>
		
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