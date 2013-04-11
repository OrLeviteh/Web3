<?php

	$m = new MongoClient(); //make a connection
	$db = $m -> ram; //use a particular db
	$ramcollection2 = $db -> ramcolors2; //select a collection (similar to a table)


 $ramcollection2->remove();
	
	

	
?>
<html>
<body>

<p style="font-family: sans-serif;text-align:center; padding-top:30px;">Ramcolors2 Collection is now empty<br>
<a href="index.php">back to main page</a>
</p>
</body>
</html>