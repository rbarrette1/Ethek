<!DOCTYPE html>
<html lang="en-us" ng-app="myApp">

	<head>
 
		<!-- 
				Internet Tools Project
				Version 1.0
				login.html
				Authors:   Rachelle Barrette
						   Thomas Malley
			
				Date: 		2017-01-24	
			
						                                  -->
						
						
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
			
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
			
			
			
			<script src="js/app.js"></script>
			
			
			<title>Log In</title>
			
			
			<style>
				map{
						10px dashed orange;
				}
			
			
					#img1 {
					position: absolute;
					display:block;
					z-index: 1;
				}
				
				#img2 {
					
					position: absolute;
					display:block;
					
				}
				#img3 {
					
					position: absolute;
					display:block;
					
				}
				#img4 {
					
					position: absolute;
					display:block;
					
				}
				#img5 {
					
					position: absolute;
					display:block;
					
				}
				#img6 {
					
					position: absolute;
					display:block;
					
				}
				#img7 {
					
					position: absolute;
					display:block;
					
				}
				#img8 {
					
					position: absolute;
					display:block;
					
				}
			
				
				.imgContainer div.current{z-index:1;}
				
				#cursor{
					
					position: relative;
					
					z-index: 2;
				}
				
				
			</style>
			
			
	</head>
	<body>
		<?php require_once 'templates/loginheader.php'; ?>
		
		
			
			
			<div class="imgContainer" width="1007px" height="672px">
			
					<div class="img current" id="img1">
				
						<img id="win" src="./sitepics/win10-1.png" alt="desktop1" height="75%" width="75%" usemap="#map1"> 
						<map>
							<area shape="rect" coords="865,685,885,715" href="#" >
						</map>
				
					</div>
				
				
					<div class="img" id="img2" >
				
						<img id="win" src="./sitepics/win10-2.png" alt="desktop2" height="75%" width="75%" usemap="#map2"> 	
						<map>
							<area shape="rect" coords="737,266,1000,318" href=" " >
						</map>
				
					</div>
				
				
					<div class="img" id="img3" >
				
						<img id="win" src="./sitepics/win10-3.png" alt="desktop3" height="75%" width="75%" usemap="#map3"> 
						<map>
							<area shape="rect" coords="882,334,992,369" href=" " >
						</map>
					</div>
				
					<div class="img" id="img7" >
				
						<img id="win" src="./sitepics/win10-7.png" alt="desktop7" height="75%" width="75%" > 			
				
					</div>
				
				
					<div class="img" id="img8" >
				
						<img id="win" src="./sitepics/win10connected.png" alt="desktop8" height="75%" width="75%" > 			
				
					</div>
					
					<img id="cursor" src="./sitepics/cursor.png" alt="desktop" height="1%" width="1%" z-index="5"  > 
				
			</div>
			
			
			
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
		
		
		
			
			
			
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
						
			<button id="map1" onclick="changePic()" name="stepone">show me step1!</button>		
			<button id="map2" onclick="changePic2()" name="steptwo">show me step2!</button>			
			<button id="map3" onclick="changePic3()" name="stepthree">show me step3!</button>		
			<button id="map4" onclick="changePic4()" name="laststep">show me the last step!</button>
			<script type="text/javascript">
				var one = document.getElementById("map1");
				var two = document.getElementById("map2");
				var three = document.getElementById("map3");
				var four = document.getElementById("map4");
				two.style.display="none";
				three.style.display="none";
				four.style.display="none";
			</script>
			<?php include 'templates/loginfooter.php'; ?>
			
