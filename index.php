<?php
	session_start();
	require_once __DIR__ . '/vendor/autoload.php' ;
	require 'config.php';

	$fb = new Facebook\Facebook([
	  'app_id' => $appid,
	  'app_secret' => $appsecret,
	  'default_graph_version' => 'v2.5',
	]);
?>

<!DOCTYPE html>
<html>
<head>
	<title> Application FB</title>
	<script type="text/javascript" src="public/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="public/js/script.js"></script>
</head>
<body>
	<h1>Page du projet</h1>

	<?php if(isset($_SESSION["ACCESS_TOKEN"])) :?>
		
		<a href="logout.php">Se déconnecter </a><br /> <br />
		
		<?php 
			$fb->setDefaultAccessToken($_SESSION["ACCESS_TOKEN"]);

			try 
			{
			  $response = $fb->get('/me');
			  $userNode = $response->getGraphUser();
			} 
			catch(Facebook\Exceptions\FacebookResponseException $e) 
			{
			  // When Graph returns an error
			  echo 'Graph returned an error: ' . $e->getMessage();
			  exit;
			} 
			catch(Facebook\Exceptions\FacebookSDKException $e) 
			{
			  // When validation fails or other local issues
			  echo 'Facebook SDK returned an error: ' . $e->getMessage();
			  exit;
			}

			echo 'Logged in as ' . $userNode->getName(); 
		?>
		<br /> <br />
		<?php 
			try 
			{
			  $response = $fb->get('/me/albums');
			  $albums = $response->getDecodedBody();
			  //var_dump($albums);
			  foreach($albums["data"] as $album)
			  {
			  	echo "<h1>".$album['name']."</h1>";
			  	$response = $fb->get('/'.$album["id"]."/photos?fields=id,source");
			  	$photos = $response->getDecodedBody();
				  foreach($photos["data"] as $photo)
				  {
				  	echo "<img style='width:150px' src='".$photo["source"]."' /> <br />";
				  }
			  }
			} 
			catch(Facebook\Exceptions\FacebookResponseException $e) 
			{
			  // When Graph returns an error
			  echo 'Graph returned an error: ' . $e->getMessage();
			  exit;
			} 
			catch(Facebook\Exceptions\FacebookSDKException $e) 
			{
			  // When validation fails or other local issues
			  echo 'Facebook SDK returned an error: ' . $e->getMessage();
			  exit;
			}

			
		?>


	<?php else:?>

	<?php endif; ?>
</body>	
</html>