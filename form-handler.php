<html>
<?php

    include_once 'connectDatabase.php';
    include('todo.html');
    
?>
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
	if (isset($_POST["Email"])){
		echo $_POST["Email"];
	}
	?>

</body>
</html>