<?php
 $server_name="localhost";
 $user_name = "root";
 $password = "";
 $database = "signup";

 $con = new mysqli($server_name,$user_name,$password,$database);
	if (!$con)
	{
		echo "There are some problems while connecting the database";
	}
	// There are no errors, so let's get data from the form

	$username = $_POST['username'];
	$Email = $_POST['Email']; 
	$Password = $_POST['Password'];
	$Repeat_Password = $_POST['Repeat Password'];

	// Now we have collected the form data to variables
	// Let's insert them to the table

	$qry = "INSERT INTO `users`(`username`, `Email`, `Password`, `Repeat Password`) VALUES ('$username','$Email','$Password','$Repeat_Password')";

	$insert = mysqli_query($con,$qry);
	if(!$insert)
	{
		echo "There are some problems while inserting data";
	}
	else
	{
		echo "Data Inserted";
	}
?>