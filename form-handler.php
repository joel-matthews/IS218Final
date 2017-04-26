<html>
<body>

Welcome <?php 
	if (isset($_POST["fName"])){
		echo $_POST["fName"];
	}
	else {
		echo "(you didn't provide a name)";
	}
	
		
?><br>
Your email address is: <?php
	echo $_GET["Email"];
	echo filter_input(INPUT_GET, 'Email');
	?>

</body>
</html>