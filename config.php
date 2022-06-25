<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('493358083424-9f7iepqdad2i689qm73mn1nld2m2vbi8.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:8080/Mini%20Project/loginform.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 