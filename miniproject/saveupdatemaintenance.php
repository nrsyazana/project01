<?php
include ("dbase.php");

extract ($_POST);

//Dapatkan Tarikh Dan Masa Masuk
$tarikh = date("d-m-Y", time());
$masa = date("H:i:s", time());

$query = "UPDATE maintenance SET year1 = '$year1', fee = '$fee', payment = '$payment', total = '$total', status = '$status', balance = '$balance', name = '$name', date = '$date' WHERE matric = '$matric'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in saveupdatemaintenance.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='viewmaintenance.php' </script>";
}
?>