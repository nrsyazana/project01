<!-- savereg.php -->
<!-- To insert data of member registeration. -->
<?php

include("dbase.php");

//Dapatkan Tarikh Dan Masa Masuk
extract( $_POST );
$tarikh = date("d-m-Y", time());
$masa = date("H:i:s", time());
$query = "INSERT INTO register (username,password,confirm,name,matric,address,faculty,gender,phone,email) VALUES('$username','$password','$confirm','$name','$matric', '$address','$faculty','$gender','$phone','$email')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='registermember.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>