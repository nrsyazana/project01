<!-- savemaintenance.php -->
<!-- To insert data of maintenance fee. -->
<?php

include("dbase.php");

//Dapatkan Tarikh Dan Masa Masuk
extract( $_POST );
$tarikh = date("d-m-Y", time());
$masa = date("H:i:s", time());
$query = "INSERT INTO maintenance (year1,fee,payment,total,status,balance,name,matric,date) VALUES('$year1','$fee','$payment','$total','$status','$balance','$name','$matric','$date')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='maintenance.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>