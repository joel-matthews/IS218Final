<?php
	require_once 'database.php';
	
	$query = 'SELECT * FROM Accounts ORDER BY id';
	$statement = $db->prepare($query);
	$statement->execute();
	$categories = $statement->fetchAll();
	$statement->closeCursor();
?>


    
    
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>IS218 Test</title>
</head>

<!-- the body section -->
<body>
		<main>
			
	    <?php foreach ($results as $oneLine) : ?>
	    <div>
	        <?php echo $oneLine['email']; ?>
	        <br /><br />
	    </div>
		<?php endforeach; ?>		
			
		</main>
</body>
</html>