<?php

include("dbase.php");

//Dapatkan Tarikh Dan Masa Masuk
extract( $_POST );
$tarikh = date("d-m-Y", time());
$masa = date("H:i:s", time());
$query = "INSERT INTO financial (id,date,total_fee,expenses,cash,finance,yearly,monthly) VALUES('$id','$date','$total_fee','$expenses','$cash','$finance','$yearly','$monthly')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='viewfinancial.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>