<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title> Transfert de photo</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
		<link rel="stylesheet" type="text/css" href="/public/css/front.css">
		<link rel="stylesheet" type="text/css" href="/public/css/transfert.css">
		<script type="text/javascript" src="/public/js/jquery-3.1.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript" src="/public/js/transfert.js"></script>
	</head>
	<body>
	<?php include('navbar.php'); ?>
			
		<div class="container-fluid">
			<div class="row">
				<span class="ecartement"><h2> Transférer une photo </h2></span>
			</div>
			<div class="row">
				<div class="dropdown ecartement">
					<button class="btn btn-secondary dropdown-toggle" id="bouton-dropdown" type="button" data-toggle="dropdown">Méthode d'ajout de photo
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">Sélectionner un album</a></li>
						<li><a href="#">Importer depuis son ordinateur</a></li>
					</ul>	
				</div>
			</div>
			<div class="row center-block" id ="listephotos">
				<div class="col-md-4" >
					<img class="crop image-transfert" data-toggle="modal" data-target="#myModal" style="background-image: url('/img/placeholder.jpg')";>
					<div id="myModal" class="modal fade" role="dialog">
	  					<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Photo</h4>
								</div>
								<div class="modal-body">
									<img class="image-grande" src="/img/placeholder.jpg">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" id="selectionner"> Sélectionner </button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<img class="crop image-transfert" data-toggle="modal" data-target="#myModal" style="background-image: url('/img/placeholder.jpg')";>
				</div>
				<div class="col-md-4">
					<img class="crop image-transfert" data-toggle="modal" data-target="#myModal" style="background-image: url('/img/placeholder.jpg')";>
				</div>
			</div>
			<div class="row text-center">
				<button id="envoi-participation" type="button" class="btn btn-secondary btn-lg btn-border">Je Participe</button>
			</div>
		</div>	
	</body>
</html>