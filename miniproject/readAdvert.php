
<?php

include("dbase.php");

//Dapatkan Tarikh Dan Masa Masuk
extract( $_POST );
$tarikh = date("d-m-Y", time());
$masa = date("H:i:s", time());
$query = "INSERT INTO e_advertisement (title,message,day) VALUES('$title','$message','$day')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='e-advert.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>