<?php
// if(isset($_POST['submit']))
include_once 'connectDatabase.php';
include('form-handler.php');

{

	if (!isset($_REQUEST['fName']) || !isset($_REQUEST['lName']) || !isset($_REQUEST['Email']) || !isset($_REQUEST['Password'])){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was missing.<br><a href='index.php'>Go back to main page.</a>");
	}
	else if ($_REQUEST['Email'] == null || $_REQUEST['Password'] == null){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was blank.<br><a href='index.php'>Go back to main page.</a>");
	}
	
	$fName = $_REQUEST['fName'];
	$lName  = $_REQUEST['lName'];
	$Email=$_REQUEST['Email'];
	$Phone=$_REQUEST['Phone'];
	$DOB=$_REQUEST['DOB'];
	$Gender=$_REQUEST['Gender'];
	$Password=$_REQUEST['Password'];


	//Let's make sure the e-mail doesn't already exist.
	$sql = 'SELECT * FROM Accounts where Email="'.$Email.'"';
	$results = runQuery($sql);
	
	//If the following line has results (the array length is more than 0), that means data/e-mail already exists.
	if (count($results) > 0){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: The e-mail address already exists.<br><a href='index.php'>Go back to main page.</a>");
	}

	//Let's add the data.
	$sql = 'INSERT INTO Accounts (`fName`, `lName`, `Email`, `Phone`, `DOB`, `Gender`, `Password`) VALUES ("'.$fName.'", "'.$lName.'", "'.$Email.'", "'.$Phone.'", "'.$DOB.'", "'.$Gender.'", "'.$Password.'")';
	$results = runQuery($sql);
	
	echo "User Added.";



}
?>