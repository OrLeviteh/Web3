<?php 

$m = new MongoClient();
	$db = $m -> ram;
	$ramcollection2 = $db -> ramcolors2; //collection that has the "good" and "bad" lists
	
$a = new MongoClient();
		$db = $a -> ram;
		$all = $db -> all; //collects all the keywords entered into the form box.
	
?>

<html>
<head>
<style>
	body{margin: 0 auto;
		text-align: left;
		padding: 60px;
		width: 800px;}
		h2{text-align: center;
		color: gray;
		font-family: sans-serif;}
	h4{text-align: center;
		color: gray;
		font-family: sans-serif;
		font-size: small;}	
	.img{position: absolute;
		text-align: center;
		z-index:-1;	}
	.in{margin: 0 auto;
		font-family: sans-serif;
		width:400px;
		z-index:4;
		padding-top: 140px;
		padding:40px; 	
		text-indent: 0px;	}
	.out{position: absolute;
		font-family: sans-serif;
		text-align: center;
		margin: 0 auto;
		width: 200px;
		height: 280px;	}
	.debug{padding: 100px;
		padding-top: 40px;
		margin-top: 120px;
		font-family: sans-serif;
		background-color: rgba(200,200,200,0.5);	}
	ul{	text-indent: 0px;
		margin-left: 0px;
		-webkit-margin-before:0px;
		-webkit-margin-after:0px;
		-webkit-padding-start: 0px;	}
	li{	list-style: none;
		line-height: 2em;
		text-align: center;	
		text-indent: 0px;	}
	a{text-decoration: none;
		color:#1000b9;	}
	a:hover{text-decoration: underline;
		color:
		#0ba99f;}
</style>
</head>
<body>


<div class="in">
	
	<h2> ---Midterm--- <br> Check it out! </h2>
	<ul>
		<li style="font-size: large;"><b><a href="whatchaupto.php">**Start interacting!**</a></b></li>
		<br>
		<li><a href="inputred.php">Input item into <b>bad</b> collection</a></li>
		<li><a href="inputgreen.php">Input item into <b>good</b> collection</a></li>
		<li><a href="ramcolorsdbwhite.php">Insert ramcolors2 initial database</a></li>
		<br>
		<li><a href="link">Files on github</a></li>
		<br><br>
		<li style="font-size: small; line-height:1em;"><a href="empty.php" target="_blank">Empty Ramcolors2 Collection<br>(Don't press this unless you are sure!!)</a></li>
	</ul>
	<br>
	<h4><a href="http://orleviteh.com/" target="_blank" style="text-decoration:none; color:gray; font-family:sans-serif;font-size: small;">Or Leviteh</a></h4>
</div>


<div class="debug">

	<h2>DeBug</h2>
	<b>Collection RamColors2 Ram2:</b>
	
	<?php
	$cursor2 = $ramcollection2->find();
		
		foreach($cursor2 as $doc2){ 
			
			foreach($doc2 as $color2){ 
				
				foreach($color2 as $c2){?>
				
				<p style="color:<?php echo $doc2['value']; ?>;"> <?php echo $c2;?> </p>
	<?php	}	}	}  ?>
	
	<br><br>
	
	<b>Collection RamColors ALLL:</b>
	
	<?php
	$cursorall = $all->find();
		
		foreach($cursorall as $docall){ ?>
		
				<p> <?php echo $docall['allarray'];?> </p>
	
	<?php	}  ?>
	
	
</div>

</body>
</html>