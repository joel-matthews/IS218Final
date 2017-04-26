<?php
// if(isset($_POST['submit']))
require('database.php');
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$birthday=$_POST['birthday'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];

	$sql="INSERT INTO Accounts (fName, lName, Email, Phone, DOB, Gender, Password) VALUES ('$fName','$lName','$Email','$Phone','$DOB','$Gender','$Password')";


	$statement = $db->prepare($sql);
	$statement->execute();
	$statement->closeCursor();
}
?>