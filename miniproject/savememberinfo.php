<?php
include ("dbase.php");

extract ($_POST);

//Dapatkan Tarikh Dan Masa Masuk
$tarikh = date("d-m-Y", time());
$masa = date("H:i:s", time());

$query = "INSERT INTO login SET date = '$date', total_fee = '$total_fee', expenses = '$expenses', cash = '$cash', finance = '$finance', yearly = '$yearly', monthly = '$monthly'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in saveupdatefinancial.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='viewfinancial.php' </script>";
}
?>