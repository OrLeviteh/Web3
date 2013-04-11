<?php 
	
//collects all the keywords entered into the form box.
	$a = new MongoClient(); 
	$db = $a -> ram;
	$all = $db -> all;
	//insert that to mongo
	$alldoc = array("allarray" => $_POST['content']);
 	$all -> insert($alldoc);

//new session everytime new user	
	if(isset($_POST['session'])){
	
		//echo "Got Session:";
		
		$u = new MongoClient(); 
		$db = $u -> ram; 
		$ramuser = $db -> ramuser; 
		
		//find
		$find = array("_id" => new MongoId($_POST['session']));
		
		//print_r($find);
		
		$update = array( '$push' => array( "usercontent" =>  $_POST['content'] ));
		
		//print_r($update);
		
		$ramuser->update($find, $update);
		
		//pull info
		
	}else {
		//echo "No session";
		$u = new MongoClient(); 
		$db = $u -> ram; 
		$ramuser = $db -> ramuser;

		$userdoc = array ("usercontent" => array( ) );
		$ramuser -> insert($userdoc);
		
	}
	
	if(!isset($userdoc)){
		$id= $_POST['session'];
		
	}else{
		$id= $userdoc["_id"]; 
	}

?>

<html>
<head>
	<style>
	body{margin: 0 auto;
		padding: 60px;
		width: 800px;
		font-family: sans-serif;			}
	h2{	text-align: center;
		color: gray;
		padding-left: 205px;	}	
	.img{position: absolute;
		text-align: center;
		z-index:1;	}
	.in{text-align: center;
		position: absolute;
		width: 600px;
		z-index:6;
		padding-left: 220px;
		padding-top: 140px; 	}
	.new{text-align: center;
		position: absolute;
		height: 30px;
		top:120px;
		left:280px;
		z-index:2;
		width:270px;
		color:gray;	
		font-size: small;
		background-color: white;}
.bottom{text-align: center;
		position: absolute;
		top:650px;
		left:300px;
		padding-bottom: 50px;
		z-index:2;
		width:600px;
		color:gray;	
		font-size: small;	}
	.out{position: relative;
		font-size: x-large;
		font-weight: bold;
		background-color: rgba(127,127,127,0.24);
		top:42px;
		left: 91px;
		width: 250px;
		height: 305px; }
	.debug{padding: 100px;
		margin-top: 400px;
		background-color: rgba(200,200,200,0.5);		}
	
	
	</style>
</head>
<body>


<div class="in">
	<form action="whatchaupto.php" method="post">
		http:// <input type="text" name="content">
		<input type="submit">
	
		<input type="hidden" name="session" value="<?php echo $id; ?>">

	</form>
</div>

<h2>Whatcha up to?</h2>

<img src="m700.png" class="img">

<div class="out">
<?php
	$m = new MongoClient(); //make a connection
	$db = $m -> ram; //use a particular db
	$ramcollection2 = $db -> ramcolors2; //select a collection (similar to a table)


	if ( isset( $_POST['content'] ) ){
		
		 $obj = array("_id" => new MongoId($_POST['session']));

		 $session = $ramuser->findOne($obj); 
	  
		 foreach($session["usercontent"] as $item){
		//get session cursor
		
		//iterate on session cursor
		
		$content= $_POST['content'];		
		$findNew = array( 'array'=>  array('$in' => array($item) )); //parameter
		$cursor = $ramcollection2 -> find($findNew); 
		$count = $cursor->count(true); //number of elements returned
		
		if($count > 0){ ?>
		<!--<ul class="ulout" style="color: <?php echo $doc['value']; ?>;">-->

		<?php foreach($cursor as $doc){ 
			//random array stuff
			$positionleft = array(-10, -5, 0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100, 105, 110, 115, 120, 125, 130, 135, 140, 145, 150, 155,160, 165, 170, 175, 180, 185, 190, 195, 200);  
			$positionright = array(0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100, 105, 110, 115, 120, 125, 130, 135, 140, 145, 150, 155,160, 165, 170, 175, 180, 185, 190, 195, 200, 205, 210, 215, 220);  
			$positionbottom = array(0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100, 105, 110, 115, 120, 125, 130, 135, 140, 145, 150, 155,160, 165, 170, 175, 180, 185, 190, 195, 200, 205, 210, 215, 220, 225, 230, 235, 240, 245, 250, 255, 260, 265, 270, 275, 280, 285, 290, 295, 300 );  
			$positiontop = array(-10, -5, 0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100, 105, 110, 115, 120, 125, 130, 135, 140, 145, 150, 155,160, 165, 170, 175, 180, 185, 190, 195, 200);  
			
			$randpositionleft = $positionleft[rand(0,42)];  
			$randpositionright = $positionright[rand(0,44)];  
			$randpositionbottom = $positionbottom[rand(0,60)];  
			$randpositiontop = $positiontop[rand(0,42)];  

			$css =	"top:".$randpositiontop.";bottom:".$randpositionbottom.";left:".$randpositionleft.";right:".$randpositionright.";color:".$doc['value'].";";
		?> <p style="<?php echo $css; ?> position: absolute;"  class="pout"><?php echo $item;?> </p>

	<div class="new">
	
	I put "<?php echo $item;?>" in your memory. 
	
	</div> <!-- new -->

		<?php } //foreach cursor    ?> 
		
		<?php }// count
		 else{ ?>

	<div class="new">
	
	"<?php echo $item;?>" is not on my list. Try again.
	
	</div> <!-- new -->
			
		<?php }//else  ?>  
		
		<?php } //end for each session value ?>
		

		<?php }else{ ?>
		
		<?php $cursor = $ramcollection2 -> find(); ?>
		
				<?php }//else	?>
</div> <!-- out -->


<div class="bottom">

	<p><b>Are you procrastinating? Try to free up some space in your head.</b>
	<br><br>
	Or Leviteh || Web 3 || April 2013
	</p>
</div>
</body>
</html>
