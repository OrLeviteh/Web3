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

<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>New Awesome Schedule</title>
		<style>
			body{  width: 100%; height: 100%; margin: 0 ; padding: 0;}
			#main{ width: 600px; margin: 0 auto; padding: 30px; background-color: #cccccc; min-height: 800px; }
/* 			#main article{ padding: 10px; margin: 20px 0; background-color: lightblue; } */
		/*
	.Junk-Food {  background-color: orange !important;  }
			.Healthy-Food{ background-color: green !important; }
			.On-the-Go{background-color: gray !important;}

			p.Pixie-Sticks{ font-size: 8em; color: red;}
*/
			

			.day {
				background-color: white;
				margin-bottom: 20px;
				padding: 15px;				
			}
			
			
			.fos  {
			text-indent: 2em;
			padding-top: 10px;
			padding-bottom: 10px;
			font-weight: bold;
			}
			
			.Fun  {background-color: #ff9aeb;			}
			.School  {background-color: #74709b;			}
			
			ul.timeofday{padding-top:10px;	
				padding-bottom: 10px;
				font-size: medium;
				padding-left: 0px;
				color: white;}
				
			ul.Morning{background-color: orange;} 
			ul.Noon{background-color:#ff0066;	} 
			ul.Afternoon{background-color: #8a009f;} 
			ul.Evening{background-color: #55008e;} 
			ul.Night{background-color: #0e0080;} 
			
			li.act{
				text-indent: 3em;
				list-style: none;	
			}
						
		</style>
	</head>
	<body>
		
		<section id = 'main'>
		<?php foreach($week as $day => $type){?>
			
			<div class="<?php echo $day; ?> day" >   <!-- naming the class school or fun -->
	
			<h2> <?php echo $day; ?> </h2>			 
			 
			<?php if(is_array($type)==true){?>

				<?php foreach ($type as $fos => $time){ ?>
			
					<article class= "<?php echo $fos; ?> fos" > 
			 
						<h3><?php echo $fos;?> </h3>
			 
					<?php if (is_array($time)==true){?>

						<?php foreach ($time as $timeofday => $act) {?>
				 			
						<ul class = "<?php echo $timeofday; ?> timeofday" >	<?php echo $timeofday; ?> </ul>
						
						<li class = "act"> <?php echo $act; ?> </li>


					<?php } ?> <!-- foreach time as timeofday act -->

		 
			<?php } ?> <!-- //if time is array -->
				 			 		 </article>

			<?php } ?>  <!-- //for each fos time act -->
			

			<?php } ?> <!-- //if array -->
					
</div>
			
		<?php } ?> <!-- //for each week day fos -->
			
		<?php ?>
		
		
		
		</section> <!--section main -->
		
		
		
	</body>
</html>

