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
	try 
	{
	  $accessToken = $helper->getAccessToken();
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

	if (isset($accessToken)) {
	  // Logged in!
  		$_SESSION['ACCESS_TOKEN'] = (string) $accessToken;
	}
	else
	{
		unset($_SESSION["ACCESS_TOKEN"]);
	}

	header("Location: /");
?>	