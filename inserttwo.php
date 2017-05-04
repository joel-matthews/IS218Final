<?php
// if(isset($_POST['submit']))
include_once 'connectDatabase.php';
include('form-handlertwo.php');

{

	
	$task = $_REQUEST['task'];
	$date  = $_REQUEST['date'];



	//Let's add the data.
	$sql = 'INSERT INTO ToDo (`task`, `date`) VALUES ("'.$task.'", "'.$date.'")';
	$results = runQuery($sql);
	
	echo "Task Added.";



}
?>