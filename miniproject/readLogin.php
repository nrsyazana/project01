<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['role'])) {
$error = "<font color='red'><b>Field is mandatory";
}
else
{
// Define 
$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];
// Establishing Connection with Server
$conn = mysqli_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$role = stripslashes($role);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);
$role = mysqli_real_escape_string($conn,$role);
// Selecting Database
$db = mysqli_select_db($conn,"campus");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn,"select * from login where password='$password' AND username='$username' AND role='$role'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
$_SESSION['role']=$role;
	if ($role=="admin")
			{ 

                               header ("location: adminHome.php"); 
                             
			}
			else if ($role=="member")
			{ 
                              
								$_SESSION['role']=$role;
                               header ("location: memberHome.php"); 
                             

			}
} else {
$error = "<font color='red'><b>Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>
