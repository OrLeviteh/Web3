get info

<?php 
	//pull content from another page
	$content = file_get_contents('http://54.235.76.88/5/give_info.php?request=OResume');
	//echo $content;	

	$formatted_content = json_decode($content,true);
	
	print_r($formatted_content);
?>

<!doctype>

<html>
	<head>
	<title>OResume</title>
	</head>
	<body>
		<?php foreach($formatted_content as $t=>$c){?>
			<h1><?php echo $t;?></h1>
			<?php foreach($c as $d){ ?>			
			<p><?php echo $d; ?></p>
		<?php } 
		} ?>	
	</body>
</html>