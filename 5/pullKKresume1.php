<?php 
	//pull content from another page
	$content = file_get_contents('http://ec2-107-21-207-131.compute-1.amazonaws.com/kersh_resume/kersh_resume.php?request=resume');
	
	//echo $content;	

	$formatted_content = json_decode($content,true);
	
	//print_r($formatted_content);
?>

<!doctype>

<html>
	<head>
	<title>Kristen Kersh Resume</title>
<style>
			body{  width: 100%; height: 100%; margin: 0 ; padding:0;
			margin-bottom: 40px;
				padding-top: 40px; padding-bottom: 40px;
				text-indent: 300px;
			
/* 			background-image:url('http://www.emoticonswallpapers.com/background/skulls/skulls-background-pattern-0714.gif'); */
			
			}
			#main{ width: 100%; margin: 0 auto;  background-color: rgba(232,232,232,0.37); min-height: 800px; 
				padding-top: 20px; margin-bottom: 40px;
								font-family:  sans-serif;

			}

		
			h1 {text-align: center;
			text-indent: 0;
			color: #4b4d70;
				padding-bottom: 15px;
				font-family:sans-serif;
				font-weight: bold;
				text-shadow: 1px 1px 1px rgba(0,0,0,0.29)		

			}
		
		
			h3 {
				color:gray;
				background-color: rgba(233,233,233,0.76);
				padding-top: 15px;
				padding-bottom: 15px;
				padding-left: 30px;
				font-family:  sans-serif;
				margin-top: 0px;
				text-shadow: 1px 1px 1px rgba(255,255,255,1)		


				
			}
			
		
			
			h2{
				padding-top: 20px;
				padding-bottom: 20px;
				padding-left: 30px;
				font-family:  sans-serif;
				background-color: white;	
				margin-bottom: 0px;	
				text-shadow: 0.5px 0.5px 0.5px rgba(0,0,0,0.29)		
			}

			.one {
			
				margin-right: auto;
				margin-bottom: 20px;
			}
			
						
			.parsons  {
				
				padding-bottom: 15px;
			}
		
		
		/*
	.Parsons The New Schoolparsons{
				padding-top: -15px !important;
			}
*/
	
		
			
			.ny{
				line-height: 2em;
				padding-left: 30px;
			}
						
		</style>
	</head>

	<body>
	
	
	
	
	<h1> Kristen Kersh  ||  Resume </h1>

	
	<section id="main">
	
	<?php foreach($formatted_content as $education => $content){?>
			
			<div class="<?php echo $education; ?>one" >   <!-- naming the class school or fun -->
	
			<h2> <?php echo $education; ?> </h2>			 
			 
			<?php if(is_array($content)==true){?>

				<?php foreach ($content as $parsons => $time){ ?>
			
					<article class= "<?php echo $parsons; ?> parsons" > 
			 
						<h3><?php echo $parsons;?> </h3>
			 
					<?php if (is_array($time)==true){?>

						<?php foreach ($time as $zero => $ny) {?>
				 			
						<div class = "ny"> <?php echo $ny; ?> </div>


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