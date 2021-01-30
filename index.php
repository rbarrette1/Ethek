<!DOCTYPE html>
<html>

	<head>
 
		<!-- 
				Internet Tools Project
				Version 1.0
				index.html
				Authors:   Rachelle Barrette
							   Thomas Malley
			
				Date: 		2017-01-13	
				Last Modified: 2017-03-29
				Working: YES
			
						                                  -->
						
				
			<meta charset="UTF-8">
			
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
			<link rel="icon" type="image/png" href="/sitepics/logo.png">
			<title>Ethek</title> 
			

	</head>

	<body>
		
		<?php require_once 'templates/header.php'; ?>
		
		<div id="catchphrase">
		<h1>We know that technology isn't
		the easiest thing to
		understand sometimes.<br/>
		That is why we are here.</h1>
		<img src="sitepics/arrow.png" alt=""/>
		</div>
	<div id="meet">
	<p id="meetethek">MEET ETHEK</p>
	<table id="ethekTables">
		<tr id="ourtable">
			<th>Our Story</th>
			<th>Our Vision</th>
			<th>Our way</th>
		</tr>
		<tr id="infoTable">
			<td >
				We are just university students who are interested in helping the world better understand the ins and outs of buying technology, cars, etc..
			</td>
			<td>
				This company was started on the basis of helping you to purchase your next product confidently. We aren't here to sell you the product but to help you to make the correct purchase and leave you confident with your new investment.
			</td>
			<td>
				How do we do it? That's easy. We get all our information from trusted sources and we share it with you via chat, videos forums, how-tos and more.
			</td>
		</tr>
	</table>
	<br/><br/>
	</div>
	
	<!--
	Makes a 2X2 table
	Table header outlining names
	table entry in each "td" will be link to article/video/tutorial from database
	-->
	<div id="sample">
	 <table id="sampletable">
  <tr>
    <th>Sample Video</th>
    <th>Sample Article</th>
    <th>Sample Tutorial</th>
  </tr>
  <tr>
    <td>Video</td>
    <td>Article</td>
    <td>Tutorial</td>
  </tr>

</table> 
</div>
<br/><br/><br/>
	
	
	<footer>	
	
			<?php require_once 'templates/footer.php'; ?>
		
	</footer>
	</body>
</html>
