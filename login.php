<?php 
	session_start();
	require_once __DIR__ . '/vendor/autoload.php' ;
	require 'config.php';

	$fb = new Facebook\Facebook([
	  'app_id' => $appid,
	  'app_secret' => $appsecret,
	  'default_graph_version' => 'v2.5',
	]);
	
	$helper = $fb->getRedirectLoginHelper();
	$scope = ['email','user_likes','user_photos'];
	$loginUrl = $helper->getLoginUrl('http://jsy.fbdev.fr/login-callback.php', $scope);

?>

<!DOCTYPE html>
<html>
<head>
	<title> Se connecter à FB</title>
	<script type="text/javascript" src="public/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="public/js/script.js"></script>
</head>
<body>
	<h1>Se connecter</h1>
	<!--<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
	</fb:login-button>-->
	<a href="<?php echo $loginUrl ?>">Log in with Facebook!</a>
	<button id="subscribe">S'inscrire</button>
	<div id="status"></div>
	<button id="disconnect">Se déconnecter</button>
</body>	
</html>