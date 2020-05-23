<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("clientid");
	$gClient->setClientSecret("clientsecret");
	$gClient->setApplicationName("CPI Login");
	$gClient->setRedirectUri("https://university-277504.ts.r.appspot.com/g-callback");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
