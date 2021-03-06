<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page d'accueil</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="../public/css/style.css">
	<link rel="stylesheet" href="../public/css/front.css">
	<script type="text/javascript" src="../public/js/jquery-3.1.1.min.js"></script>
</head>

<body>
	
	<?php include('navbar.php') ?>

	<div id="pres" class="container-fluid">
		<h1 class="text-center">Concours photo</h1>
		<div class="row">
			<p class="text-center col-md-8 col-md-offset-2">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p><br />
		</div>
	</div>

	<div id="lot" class="container-fluid">
		<h1 class="text-center">Un lot à gagner !</h1>
		<div class="row">
			<div class="col-md-2 col-md-offset-5">
				<img src="../public/img/chaton.jpg" alt="lot à gagner">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<p class="descriptionLot text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor.
				</p>
			</div>
		</div>
	</div>

	<div id="howToPlay" class="container-fluid">
		<h1 class="text-center">Comment jouer ?</h1>
		<div class="row">
			<p class="text-center col-md-8 col-md-offset-2">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>

	<div id="bestPictures" class="container-fluid">
		<h1 class="text-center">Meilleures photos</h1>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
					<li data-target="#carousel-id" data-slide-to="1" class=""></li>
					<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<img alt="First slide" src="../public/img/chaton.jpg" data-toggle="modal" data-target="#img1">
						<div class="container">
							<div class="carousel-caption">
								
							</div>
						</div>
					</div>
					<div class="item">
						<img alt="Second slide" src="../public/img/chaton.jpg">
						<div class="container">
							<div class="carousel-caption">
								<h1></h1>
				
							</div>
						</div>
					</div>
					<div class="item active">
						<img alt="Third slide" src="../public/img/chaton.jpg">
						<div class="container">
							<div class="carousel-caption">
								<h1></h1>
								
							</div>
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="img1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Nom Prenom <br />
				      	Publié le 10/12/2016</h4>
				      </div>
				      <div class="modal-body">
				 		<img src="../public/img/chaton.jpg" alt="lot à gagner">
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">J'aime</button>
				        <button type="button" class="btn btn-default">Je partage</button>
				      </div>
				    </div>
				  </div>
				</div>
				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			</div>
		</div>
			


			<!-- <img src="../public/img/chaton.jpg" alt="lot à gagner"> -->
	
	</div>
	<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>