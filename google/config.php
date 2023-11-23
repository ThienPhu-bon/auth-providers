<?php

// Google API configuration
define('GOOGLE_CLIENT_ID', '225723382941-1h185hsco4up6h4p8uvph26q40bio5db.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_REDIRECT_URL', 'http://localhost/DOAN1\DOAN1');

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId(GOOGLE_CLIENT_ID);

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret(GOOGLE_CLIENT_SECRET);

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_client->addScope('email');
$google_client->addScope('profile');

//start session on web page
session_start();
?>
