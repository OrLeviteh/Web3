<?php

	$m = new MongoClient(); 
	$db = $m -> ram; 
	$ramcollection2 = $db -> ramcolors2; 
	
	//create a document for the database
	$document = array("type"=>"red",
					  "array"=>array(
					  
					 "D12", 	"class", 	"Web 3", 	"Interactive Design for Musuems", 	"Major Studio","Thesis Studio", 	"Interactive Prototyping", 	"home work", 	"working", 	"Home Work", 	"Home work", 	"HW", 	"my.newschool.edu", 	"homework", 	"my.newschool.edu", 	"school", 	"rage", "work"
					  
					  ),"value" => "#ff0000");
	
	//insert document into database
	$ramcollection2 -> insert($document);
	
	//create a document for the database
	$document = array("type"=>"green", 
					  "array" => array(
					  
					 	"hulu", 	"Hulu", 	"facebook", 	"youtube", 	"netflix", 	"sleep", 	"friends", 	"fun", 	"google", 	"designboom", 	"procrastination", 	"Procrastination", 	"sleeping", 	"Sleeping", 	"on facebook", 	"resting", 	"Fun", 	"playing", 	"fun", 	"Fun", 	"Fun", 	"Fun", 	"procrastinating ", 	"Procrastinating", 	"having fun", 	"nothing", 	"Nothing", 	"Nothin", 	"nothin", 	"watching TV", 	"watching tv", 	"tv", 	"TV", 	"www.facebook.com", "www.Facebook.com",  	"or", 	"thinking", 	"chilling", 	"relaxing", 	"talking", 	"cooking", 	"lying", 	"sex", 	"food", 	"game of thrones", 	"I'm awesome", 	"porkchop sandwiches", 	"laying down", 	"sitting", 	"eating", 	"texting", 	"living", 	"sexting", 	"life", 	"drinking", 	"hanging out", "relaxing", 	"sleeping", 	"9gag", 	"wine", 	"watching movies", 	"drinking wine", 	"4chan", 	"god damnit accept something", "nytimes.com", 	"twitter.com", 	"games", 	"gaming", 	"calm.com", 	"ideas", 	"errthang", 	"www.gmail.com", 	"gmail", 	"my.newschool.edu", 	"weather", 	"new york", 	"wisdom", 	"design", 	"success", 	"shopping"
					  
					  ),"value" => "white") ;

	
	//insert document into database
	$ramcollection2 -> insert($document);

?>
<html>
<body>
<p style="font-family: sans-serif;text-align:center; padding-top:30px;">If you see this, you have uploaded the data base "ramcolors2" 
<br>
<a href="index.php">back to main page</a>
</p>
</body>

</html>