<html>
<?php

    include_once 'connectDatabase.php';
    include('todo.html');
    
?>
<body>

Task: <?php 
	if (isset($_POST["task"])){
		echo $_POST["task"];
	}
	else {
		echo "(you didn't provide a name)";
	}
	
		
?><br>
Due Date: <?php
	if (isset($_POST["date"])){
		echo $_POST["date"];
	}
	?>

</body>
</html>