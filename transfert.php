<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title> Transfert de photo</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
		<link rel="stylesheet" type="text/css" href="http://jsy.fbdev.fr/public/css/style.css">
		<link rel="stylesheet" type="text/css" href="http://jsy.fbdev.fr/public/css/transfert.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
	<?php include('/views/navbar.html'); ?>
			
		<div class="container-fluid">
			<div class="row">
				<h2> Transférer une photo </h2>
			</div>
			<div class="row">
				<select> 
					<option> Sélectionner un album </option>
					<option> Transférer depuis son ordinateur</option>
				</select>
			</div>
			<div class="row center-block" id ="listephotos">
				<div class="col-md-4">
					<div class="crop" style="background-image: url('/img/placeholder.jpg')";></div>
				</div>
				<div class="col-md-4">
					<div class="crop" style="background-image: url('/img/placeholder.jpg')";></div>
				</div>
				<div class="col-md-4">
					<div class="crop" style="background-image: url('/img/placeholder.jpg')"></div>
				</div>
			</div>
			<div class="row text-center">
				<button id="envoiparticipation" type="button" class="btn btn-secondary btn-lg">Je Participe</button>
			</div>
		</div>	
	</body>
</html>