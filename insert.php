<?php
// if(isset($_POST['submit']))
require('database.php');
include('form-handler.html');

{
	$fName=$_POST['fName'];
	$lName=$_POST['lName'];
	$Email=$_POST['Email'];
	$Phone=$_POST['Phone'];
	$DOB=$_POST['DOB'];
	$Gender=$_POST['Gender'];

	$sql="INSERT INTO Accounts (fName, lName, Email, Phone, DOB, Gender) VALUES ('$fName','$lName','$Email','$Phone','$DOB','$Gender')";


	$statement = $db->prepare($sql);
	$statement->execute();
	$statement->closeCursor();
}
?>