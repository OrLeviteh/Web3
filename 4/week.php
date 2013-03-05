<?php   



$week = array(

		'Monday' => array('Fun'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Sleep',
											'Afternoon'=> 'TV',
											'Evening' => 'Dinner with friends',
											'Night' => 'Drinks with friends'),
											   
						'School'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Home Work',
										'Afternoon'=> 'Collab',
										'Evening' => 'Interactive Prototyping',
										'Night' => 'Home Work'),
											),
							
		
		'Tuesday' => array('Fun'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Sleep',
											'Afternoon'=> 'Lunch with Friends',
											'Evening' => 'Shopping',
											'Night' => 'TV'),
											   
						'School'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Home Work',
										'Afternoon'=> 'Home Work',
										'Evening' => 'Home Work',
										'Night' => 'Mental Breakdown'),
											),
		'Wednesday' => array('Fun'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Brunch with friends',
											'Afternoon'=> 'Nap',
											'Evening' => 'Movie night',
											'Night' => 'Drinks with friends'),
											   
						'School'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Major Studio',
										'Afternoon'=> 'Group work at D12',
										'Evening' => 'Group work at D12',
										'Night' => 'Home Work + Mental breakdown'),
											), 
		'Thursday' => array('Fun'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Sleep',
											'Afternoon'=> 'Museum visit with friends',
											'Evening' => 'Dinner with friends',
											'Night' => 'TV'),
											   
						'School'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Interactive Design for Museums',
										'Afternoon'=> 'Group work at D12',
										'Evening' => 'Web 3',
										'Night' => 'Home Work'),
											),
		'Friday' => array('Fun'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Brunch with friends',
											'Afternoon'=> 'Shopping',
											'Evening' => 'Shopping',
											'Night' => 'Karaoke night!'),
											   
						'School'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Major Studio',
										'Afternoon'=> 'Group work at D12',
										'Evening' => 'Group work at D12',
										'Night' => 'Collapse'),
											),
											
											
										
		'Saturday' => array('Fun'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Sleep',
											'Afternoon'=> 'TV in bed',
											'Evening' => 'Nap',
											'Night' => 'TV in bed'),
											   
						'School'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Sleep',
										'Afternoon'=> 'Home Work',
										'Evening' => 'Home Work',
										'Night' => 'Home Work'),
											),
											
											
																			
		'Sunday' => array('Fun'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Sleep',
											'Afternoon'=> 'Lunch with friends',
											'Evening' => 'Dinner with friends',
											'Night' => 'Out with friends'),
											   
						'School'=> array('Morning'=> 'Sleep',
											'Noon'=> 'Home Work',
										'Afternoon'=> 'Home Work',
										'Evening' => 'Google hangout group work',
										'Night' => 'Mental Breakdown'),
											),
											
											
					 
			 
			 
			 
			 );	
?> 

<html>
	<head>
		<title>My Schedule</title>
		
<style>
body{
}

.fun{
	background-color: #ff578a;
	width:350px;
	height: auto;
	padding: 15px;
	margin:15px;
	float:  left;
	margin-left: 100px;
}
.School{
	background-color: rgba(143,128,132,0.55);
	width:350px;
	height: auto;
	padding: 15px;
	margin:15px;
	float: left;
	
}
.div{
	width: auto;
	background-color: white;
	float:none;
	padding-top: 180px;

	
}

</style>


	</head>
	<body>
		
<div class="fun">	

	<h1> Monday Fun Day</h1>
	
	
	
	<?php	foreach($week['Monday']['Fun'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>

<div class="school">	

	<h1> Monday School Day</h1>
	
	
	
	<?php	foreach($week['Monday']['School'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>

<div class="div"> 
</br></br></br>
</div>

<div class="fun">	

	<h1> Tuesday Fun Day</h1>
	
	
	
	<?php	foreach($week['Tuesday']['Fun'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>

<div class="school">	

	<h1> Tuesday School Day</h1>
	
	
	
	<?php	foreach($week['Tuesday']['School'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>
<div class="div"> 
</br></br></br>
</div>

<div class="fun">	

	<h1> Wednesday Fun Day</h1>
	
	
	
	<?php	foreach($week['Wednesday']['Fun'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>

<div class="school">	

	<h1> Wednesday School Day</h1>
	
	
	
	<?php	foreach($week['Wednesday']['School'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>
<div class="div"> 
</br></br></br>
</div>

<div class="fun">	

	<h1> Thursday Fun Day</h1>
	
	
	
	<?php	foreach($week['Thursday']['Fun'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>

<div class="school">	

	<h1> Thursday School Day</h1>
	
	
	
	<?php	foreach($week['Thursday']['School'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>
<div class="div"> 
</br></br></br>
</div>

<div class="fun">	

	<h1> Friday Fun Day</h1>
	
	
	
	<?php	foreach($week['Friday']['Fun'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>

<div class="school">	

	<h1> Friday School Day</h1>
	
	
	
	<?php	foreach($week['Friday']['School'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>
<div class="div"> 
</br></br></br>
</div>

<div class="fun">	

	<h1> Saturday Fun Day</h1>
	
	
	
	<?php	foreach($week['Saturday']['Fun'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>

<div class="school">	

	<h1> Saturday School Day</h1>
	
	
	
	<?php	foreach($week['Saturday']['School'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>
<div class="div"> 
</br></br></br>
</div>

<div class="fun">	

	<h1> Sunday Fun Day</h1>
	
	
	
	<?php	foreach($week['Sunday']['Fun'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>

<div class="school">	

	<h1> Sunday School Day</h1>
	
	
	
	<?php	foreach($week['Sunday']['School'] as $key => $value){
				echo $key.": ".$value."<br>";
				}?>

</div>

	 </p> 		





		
		
	</body>





</html>

