<?php 
	
	$m = new MongoClient(); //make a connection
	$db = $m -> ram; //use a particular db
	$ramcollection2 = $db -> ramcolors2; //select a collection (similar to a table)
	
//working:	
if ( isset( $_POST['red'] ) ){


	//find the item with red
	//update that item using $push
	
	$find_obj = array('type'=>'red');
	$cursor = $ramcollection2->find($find_obj);
	//use count to check if we have an object
	if($cursor->count()>0 ){
		
		//echo 'cursor';
		foreach($cursor as $c){
			
			$id = $c['_id'];
			
			$find_obj = array('_id'=> new MongoId($id));
			$update_obj = array('$push'=> array('array'=> $_POST['red'] ));
			$ramcollection2->update($find_obj,$update_obj);
			
		}
		
		
	}else{
	
		//echo 'no cursor';
		$document = array("type"=>"red",					  
					      "array"=>array($_POST['red']), 
						  "value" => "#ff0000");

						  $ramcollection2 -> insert($document);

	}
}

	
?>

<html>
<head>
	<style>
	body{margin: 0 auto;
		text-align: center;
		padding: 60px;
		width: 800px;			}
	.img{position: absolute;
		text-align: center;
		z-index:-1;	}
	.in{margin: 0 auto;
		width:200px;
		z-index:4;
		padding-top: 140px;
		padding:40px; 	}
	.out{position: absolute;
		text-align: center;
		margin: 0 auto;
		width: 200px;
		height: 280px; }
	.debug{padding: 100px;
		margin-top: 500px;
		background-color: rgba(200,200,200,0.5); }
	</style>
</head>
<body>


<div class="in">
	<form action="inputred.php" method="post">
	
	<p style="color:red; text-align:left;">RED</p>
	<input type="text" name="red">
	<input type="submit">
	<br><br>

"<?php echo $_POST['red'] ?>" is now in the bad list!
	</form>
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

<br>

</div>

</body>
</html>
