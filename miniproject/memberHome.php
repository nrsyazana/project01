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
  
<?php
include('session.php');
?>



<!-- logged in user information -->
<div id="profile">	
	<div>
	<marquee direction=right scrollamount=10><b><h2><font color="black" >Welcome : <i><?php echo $login_session; ?></i></font></h2></b></marquee>
	</div>
</div>
<?php
include("dbase.php");

$query = "SELECT * FROM e_advertisement1";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    $title = $row["title"];
	$message= $row["message"];
	

	?>
	<br><br><br>
	<center><font size=6 color="#cca300"><b>ADVERTISEMENT</br></font></center>
<br><br><br><br>
	<center>
	<tr style="font-family:courier;">Advertisement Title : <?php echo $title; ?>
	<tr><br style="font-family:courier;">Message : <?php echo $message;?></tr>
	
	


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