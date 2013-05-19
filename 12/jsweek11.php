
<html>
<head>
	<style>
	body{margin: 0 auto;
		padding: 60px;
		width: 800px;
		font-family: sans-serif;}
	h2{	text-align: center;
		color: gray;
		padding-left: 205px;}	
	.img{position: absolute;
		text-align: center;
		z-index:1;	}
	.in{text-align: center;
		position: absolute;
		width: 600px;
		z-index:6;
		padding-left: 220px;
		padding-top: 140px; }
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
		font-size: small; }
	.out{position: relative;
		font-size: x-large;
		font-weight: bold;
		background-color: rgba(127,127,127,0.24);
		top:42px;
		left: 91px;
		width: 250px;
		height: 305px; 
		padding-right: 40px;
		padding-top: 100px;
		text-align: center;}
	.red{position: relative;
		font-size: x-large;
		font-weight: bold;
		background-color: red;
		top:-100px;
		width: 250px;
		height: 305px; 
		text-align: center;}
	.white{position: relative;
		font-size: x-large;
		font-weight: bold;
		background-color: white;
		top:-100px;
		width: 250px;
		height: 305px; 
		text-align: center;}
	.face{position: relative;
		font-size: x-large;
		font-weight: bold;
		background-color: white;
		top:-100px;
		width: 250px;
		height: 305px; 
		text-align: center;}
	.web3{position: relative;
		font-size: x-large;
		font-weight: bold;
		background-color: white;
		top:-100px;
		width: 250px;
		height: 305px; 
		text-align: center;
		padding-top: 50px;}
	.cat{position: relative;
		font-size: x-large;
		font-weight: bold;
		background-color: white;
		top:-100px;
		width: 250px;
		height: 305px; 
		text-align: center;
		padding-top: 50px;}
	.debug{padding: 100px;
		margin-top: 400px;
		background-color: rgba(200,200,200,0.5);		}
	
	
	</style>
	
	
		<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
		<script>
			
			
			
			$(document).ready(function(){
			
			$('.red').hide();
			$('.white').hide();
			$('.face').hide();
			$('.web3').hide();
			$('.cat').hide();
				
				<?php $check = $_POST['content']; 
					
						if($check == 'web'){  ?>
					
					$('.web3').slideToggle(2000);
					
				<?php } ?>
				
				<?php  if($check == 'empty'){ ?>
					
					$('.white').slideToggle(2000);
					
				<?php } ?>
		<?php  if($check == 'facebook'){ ?> 	$('.face').slideToggle(2000);	<?php } ?>
		<?php  if($check == 'facebook.com'){ ?> 	$('.face').slideToggle(2000);	<?php } ?>
		<?php  if($check == 'web 3'){ ?> 	$('.web3').slideToggle(2000);	<?php } ?>
		<?php  if($check == 'Web 3'){ ?> 	$('.web3').slideToggle(2000);	<?php } ?>
		<?php  if($check == 'Web3'){ ?> 	$('.web3').slideToggle(2000);	<?php } ?>
		<?php  if($check == 'web3'){ ?> 	$('.web3').slideToggle(2000);	<?php } ?>
		<?php  if($check == 'cat'){ ?> 	$('.cat').slideToggle(2000);	<?php } ?>
		<?php  if($check == 'cats'){ ?> 	
				$('.cat').slideToggle(2000);	
			/*
	var audio = $(".audio")[2000];
					audio.play();
*/
					
				$('.audio').play();	
				$('.audio').playSound('http://54.235.76.88/12/cat.mp3');
					<?php } ?>


				
				
				$('form').submit(function(e){
					
					var name = $('#content'); //set element as var
					//var location = $('#location');
					var valid = true;
					
					
					if(name.val() == ''){
						
						alert("please type something in");
						e.preventDefault();
						valid=false;
						
					}else if(name.val() == 'red'){
						
						
						$('.out').css("background-color","red");
						
					}
					else if(name.val() == 'green'){
						
						
						$('.out').animate({
							    backgroundColor: "green",
							    
							  }, 1500 );
						
					}

						
					
				});
				
			});
			
		</script>
	
</head>
<body>


<div class="in">
	<form method="post">
		http:// <input type="text" id="content" name="content">
		<input type="submit">
	
		<input type="hidden" name="session" value="<?php echo $id; ?>">

	</form>
</div>

<h2>Whatcha up to?</h2>

<img src="m700.png" class="img">


<div class="out">

<div class="red"></div>
<div class="white"></div>

<div class="face">
	<img src="http://img.labnol.org/di/facebook_icon.png">
</div>

<div class="web3">
<img src="http://www.clker.com/cliparts/1/9/0/4/11954356601633557489ryanlerch_skull_and_crossbones.svg.med.png" height="200px" width="200px">
</div>

<div class="cat">
<img src="http://cdn2-b.examiner.com/sites/default/files/styles/image_content_width/hash/18/a1/1332580359_cat-breeds.jpg?itok=qe9CxkVW" height="200px">
<audio class="audio" preload="auto">
<!-- <source src="http://54.235.76.88/12/cat.mp3" class="audio" type="audio/mpeg"> -->

<source src="cat.mp3" class="audio" type="audio/mpeg">
<source src="cat.ogg" class="audio" type="audio/ogg">
</audio>
</div>


</div>


<div class="bottom">

	<p><b>You can try these for now: Web 3, facebook, empty, cat
	</b>
	<br><br>
	Or Leviteh || Web 3 || April 2013
	</p>
</div>


	</body>
</html>