<?php
include_once 'signup.php';
$sql= "SELECT * FROM users";
$query = mysqli_query($con,$sql);
if( !$query)
{
	echo "does not work." .mysqli_error($con);die;
}
while ($data = mysqli_fetch_array($query)) {
	echo "username =" .$data['username']."<br>";
	echo "Email =" .$data['Email']."<br>";
	echo "Password =" .$data['Password']."<br>";
	echo "Repeat Password =" .$data['Repeat_Password']."<br>";
}
?>